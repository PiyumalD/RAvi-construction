<?php  
	define("DB_SERVER", "127.0.0.1");
	define("DB_USER","Ravi");
	define("DB_PASS","secretpassword");
	define("DB_NAME","Ravi_Cons");

	$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if (mysqli_connect_errno() ){
		# code...
		die("database connection fail. ".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
?> 