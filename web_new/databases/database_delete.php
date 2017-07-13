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
	$id=7;
	$query="DELETE FROM students_menu_modi ";
	$query.="WHERE id={$id} ";
	$query.="LIMIT 1";

	$result=mysqli_query($connection,$query);
	if ($result && mysqli_affected_rows($connection)==1) {
		# code...
		echo "Success!!!!!";
	}else{
		die("database query fail....".mysqli_error($connection));
	}
?>
<!DOCTYPE html>
<head>
	<title>this is working</title>
</head>
<body>
	
</body>
<?php mysqli_close($connection); ?>