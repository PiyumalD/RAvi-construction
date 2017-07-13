<?php 
	$dbhost='127.0.0.1';
	$dbuser='Ravi';
	$dbpass='secretpassword';
	$dbname='Ravi_Cons';
	$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if (mysqli_connect_errno()) {
		# code...
		die("database connection fail.. ".mysqli_connection_error()." (".mysqli_connect_errno().")");
	}
?>
<?php 
	$query="SELECT * ";
	$query.="FROM students_menu_modi";
	// $query.="WHERE visible=1 ";
	// $query.="ORDER BY position ASC";
	$result=mysqli_query($connection,$query);
	if (!$result) {
		# code...
		die("database query fail....");
	}
?>
<!DOCTYPE html>
<head>
	<title>this is working</title>
</head>
<body>
	<ul>
		<?php  while ($row=mysqli_fetch_assoc($result)) { ?>
		<li>
			<?php 
				echo $row['menu_name']. "<br/>";
			?>
		</li>
		<?php } ?>
	</ul>
	<?php 
		mysqli_free_result($result);
	?>
</body>
	
<?php 
	mysqli_close($connection); 
?>