
<?php
include 'Teacher.php';

$user="";
session_start();
$user = $_SESSION['user'];
$teacher = new Teacher($user);

if(isset($_POST['viewProfile'])){
    $teacher->viewProfile();
}

if(isset($_POST['viewStudentReport'])){
    header("location: viewReport.php");
}
if(isset($_POST['viewCourseDetails'])){
    $teacher->viewCourseDetails();
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Teacher Home</title>
    <link rel="stylesheet" type="text/css" href="../css/teachHome.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as Teacher 1 </h4>


    <div class = "top-bar">

        <h1>Ravi Costructions</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2

    <div class="main">

        <p><h3><u>Teacher's Home</u></h3></p>

        <form action="" method="post">

            <button type ="submit" name="viewProfile">VIEW PROFILE</button>
            <button type ="submit" name="editProfile">EDIT PROFILE</button>
            <button type ="submit" name="viewCourseDetails">VIEW COURSE DETAILS</button>
            <button type ="submit" name="enterMarks">ENTER STUDENTS' MARKS</button>
            <button type ="submit" name="viewStudentReport">VIEW STUDENT'S REPORTS</button>



        </form>

</div>
</body>
</html>