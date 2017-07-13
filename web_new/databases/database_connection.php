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
	$menu_name='edit me..';
	$position=4;
	$visible=1;
	$query="INSERT INTO students_menu_modi (";
	$query.=" menu_name,position,visible";
	$query.=") VALUES (";
	$query.= " '{$menu_name}',{$position},{$visible}";
	$query.=" )";
	$result=mysqli_query($connection,$query);
	if ($result) {
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