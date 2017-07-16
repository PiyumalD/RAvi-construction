<?php
$username = '';
$pass = '';

$conn= mysqli_connect('localhost','root','Whishana@2366','ravi');

if(isset($_POST['btn'])){

	$username = strip_tags($_POST['user']);
	$pass=strip_tags($_POST['pwd']);

	if(substr($username,-1)=="S"){
		$stmt=$conn->query("SELECT * FROM  student WHERE UserName='{$username}'");
		$row=$stmt->fetch_assoc();

		if($row['UserName']==$username && $row['Password']==$pass) {
			header("Location:Home_student.php");
			
		}else
			header("location:index.php?error=1");

	}else if(substr($username,-1)=='O'){
		$stmt=$conn->query("SELECT * FROM  owner WHERE UserName='{$username}'");
		$row=$stmt->fetch_assoc();

		if($row['UserName']==$username && $row['Password']==$pass) {
			header("Location:Home_owner.php");
			
		}else
			header("location:index.php?error=1");

	}else if(substr($username,-1)=="T"){
		$stmt=$conn->query("SELECT * FROM  teacher WHERE UserName='{$username}'");
		$row=$stmt->fetch_assoc();

		if($row['UserName']==$username && $row['Password']==$pass) {
			header("Location:Home_teacher.php");
			
		}else
			header("location:index.php?error=1");

	}else if(substr($username,-1)=="D"){
		$stmt=$conn->query("SELECT * FROM  dataoperator WHERE UserName='{$username}'");
		$row=$stmt->fetch_assoc();

		if($row['UserName']==$username && $row['Password']==$pass) {
			header("Location:Home_operator.php");
			
		}else
			header("location:index.php?error=1");

	}else
			header("location:index.php?error=1");


    session_start();
    $_SESSION['user'] = $username;

}
$conn->close();

?>

<html>
<head>
	<script type="text/javascript">
		<!--

        var image1=new Image()
        image1.src="../img/1.jpg"
        var image2=new Image()
        image2.src="../img/9.jpg"
        var image3=new Image()
        image3.src="../img/stock-photo-next-to-lake-izabal-guatemala-march-the-people-are-working-on-the-ore-stockpile-yard-631265732.jpg"
        var image4=new Image()
        image4.src="../img/download (1).jpg"
        var image5=new Image()
        image5.src="../img/download (2).jpg"
        var image6=new Image()
        image6.src="../img/download (4).jpg"
        var image7=new Image()
        image7.src="../img/download (5).jpg"
        var image8=new Image()
        image8.src="../img/images.jpg"
		//-->
	</script>
	<title>Ravi Heavy Machinery Equipment Training Institute</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<div class = "wrpper">
		<div class = "top-bar">
			<hl>Ravi Construction</hl>

			<p>Ravi Heavy Machinery Equipment Training Institute</p>

			
		</div><!--top-bar-->
		<div class="clmn">
			<div class="wrap2">
				<hl>Contact us</hl>

				<div class="intro-img">
					<img src="../img/images (8).jpg"  width="100" height="100">
				</div><!--intro-img-->
				<pl>
					<li>Ravi construction</li>
					<li>Aluthwala, Ambalangoda</li>
					<li>Tel: 077 7768556/ 071 8816095</li>
					<li>Fax: 091 4944070 / 076 69233800</li>
					<li>Email: rc.vtatrainingschool@gmail.com

				</li></pl>

			</div><!--wrap2-->
			<div class = "log ">

				<form name="form1"  method="post">
				<table>
					<tr>
						<td>
							User Name :
						</td>
						<td><input type ="text" name="user"></td>
						<td>
							Password :
						</td>
						<td><input type ="Password" name="pwd"></td>
						<td>
							<button type="submit" name="btn">Login </button>
						</td>
					</tr>



				</table>

				</form>
				<?php
				if(isset($_GET['error'])){
					echo '<font color="#ff0000"><p align="center">invalid username or password !!</p></font>';
				}
				?>
			</div><!--log-->
		</div><!--clmn-->
		<img src="download (1).jpg" name="slide" width="650" height="350">
		<script type="text/javascript">
		<!--
		var step=1
		function slideit(){
			document.images.slide.src=eval("image"+step+".src")
			if (step<8)
				step++
			else step=1
			setTimeout("slideit()",3500)
		}
		slideit()
		//-->
		</script>
		
	</div><!--wrapper-->
	


</body>
</html>


