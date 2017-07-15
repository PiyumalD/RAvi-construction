<?php
include 'Teacher.php';
session_start();
$user = unserialize($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Report</title>
    <link rel="stylesheet" type="text/css" href="../css/ViewCourseDetails.css"/>
</head>
<body>
<div class = "wrpper">

    <h4> You are logged as Teacher 1 </h4>

    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Course Details</u></h3></p>

        <ul>
            <li>
                <label for="CourseName"><b>Course Name :</b></label>
                <label id="CourseName"><?php echo $user->getCourseName();?></label>
            </li>
            <li>
                <label for="TeacherName"><b>Teacher's Name :</b></label>
                <label id="TeacherName"><?php echo $user->getTeacherName();?></label>
            </li>
            <li>
                <label for="BatchNo"><b>Batch No :</b></label>
                <label id="BatchNo"><?php echo $user->getBatch();?></label>
            </li>
            <li>
                <label for="NoOfStudents"><b>No of students :</b></label>
                <label id="NoOfStudents"><?php echo $user->getNoOfStudents();?></label>
            </li>
            <li>
                <label for="StartDate"><b>Starting Date :</b></label>
                <label id="StartDate"><?php echo $user->getStartDate();?></label>
            </li>
            <li>
                <label for="DueDate"><b>Ending Date :</b></label>
                <label id="DueDate"><?php echo $user->getDueDate();?></label>
            </li>

        </ul>

        </form>

    </div>
</div>

</body>
</html>