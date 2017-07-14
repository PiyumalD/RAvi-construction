<?php
include 'Student.php';
$user="";
session_start();
$user = $_SESSION['user1'];
$student = new Student($user);

if(isset($_POST['viewProfile'])){
    $student->viewProfile();
}
if(isset($_POST['editProfile'])){
    $student->editProfile();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Student Home</title>
    <link rel="stylesheet" type="text/css" href="../css/Home_student.css"/>
</head>
<body>

<div class = "wrpper">
    <h4> You are logged as  <?php echo $student->getName()?></h4>


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
            <form action="" method="post">

                <button type ="submit" name="viewProfile">VIEW PROFILE</button>
                <button type ="submit" name="editProfile">EDIT PROFILE</button>
                <button type ="submit" name="viewCourseDetails">VIEW COURSE DETAILS</button>
                <button type ="submit" name="viewMarks">VIEW MARKS</button>


            </form>



        </div> <! -- LINKS-->








</div>
</body>
</html>








































