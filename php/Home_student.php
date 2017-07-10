<?php
include 'Student.php';
$user="";
session_start();
$user = $_SESSION['user'];
$student = new Student($user);



?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Student Home</title>
    <link rel="stylesheet" type="text/css" href="../css/Home_student.css"/>
</head>
<body>

<div class = "wrpper">
    <h4> You are logged as Student  </h4>


    <div class = "top-bar">

        <h1>Ravi Constructions </h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>Student's Home</u></h3></p>
        <div class="introImg">
            <img src="../img/download%20(1).jpg"  width="400" height="300" align="right">


        </div><!--introImg-->
        <div class="links">
            <ul>
                <li><a href="#">View profile</a></li>
                <li><a href="#">Edit profile</a></li>
                <li><a href="#">View course details</a></li>
                <li><a href="#">View marks</a></li>


            </ul>


        </div> <! -- LINKS-->








</div>
</body>
</html>








































