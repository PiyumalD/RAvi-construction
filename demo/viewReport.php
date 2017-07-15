<?php
include 'Teacher.php';
$user="";
session_start();
$user = $_SESSION['user'];
$teacher = new Teacher($user);

include 'Student.php';
$username = '';

$conn= new mysqli('localhost','root','','ravi');

if(isset($_POST['btn'])) {

    $username = strip_tags($_POST['StudentID']);
//    $stmt=$conn->query("select * from  student where UserName='{$username}'");
//    $row=$stmt->fetch_assoc();
//    $x[0]=$row['Name'];

    $teacher->viewStudentReport($username);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Report</title>
    <link rel="stylesheet" type="text/css" href="../css/view_report.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as Teacher 1 </h4>

    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Students' Report</u></h3></p>

        <form action="" method="post">
            <ul>

                <li>
                    <label for="StudentID">Student ID : </label>
                    <input id="StudentID" name="StudentID" />
                </li>

                <button type="submit" name="btn"> VIEW REPORT </button>
            </ul>

        </form>

    </div>
</div>

</body>
</html>