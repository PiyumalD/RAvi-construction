<?php
include 'DataOperator.php';
$user="";
session_start();
$user = $_SESSION['user'];
$operator = new DataOperator($user);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Data Operator's Home</title>
    <link rel="stylesheet" type="text/css" href="../css/teachHome.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as <?php echo $operator->getName(); ?></h4>
    <div class = "top-bar">

        <h1>Ravi Costructions</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2

        <div class="main">

            <p><h3><u>Data Operator's Home</u></h3></p>

            <form action="" method="post">

                <button type ="submit" name="viewProfile">VIEW PROFILE</button>
                <button type ="submit" name="editProfile">EDIT PROFILE</button>

                <div class="dropdown">
                    <button class="dropbtn" name="editCourseDetails">EDIT COURSE DETAILS</button>
                    <div class="dropdown-content">
                        <a href="EditCourseDetails.php?index=1">Backhoe Loader</a>
                        <a href="EditCourseDetails.php?index=2">Excavator With Breaker</a>
                        <a href="EditCourseDetails.php?index=3">Moter Grader</a>
                    </div>
                </div>

                <button type ="submit" name="viewCourseDetails">VIEW COURSE DETAILS</button>
                
                <button type ="submit" name="enterStudentsAttendence">ENTER STUDENTS' ATTENDANCE</button>
                <button type ="submit" name="createNewAccount">CREATE NEW ACCOUNT</button>
                <button type ="submit" name="enterStudentsMarks">ENTER STUDENTS' MARKS</button>

            </form>

        </div>
</body>
</html>

