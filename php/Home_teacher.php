
<?php
include 'Teacher.php';
$user="";
session_start();
$user = $_SESSION['user'];
$teacher = new Teacher($user);

if(isset($_POST['viewProfile'])){
    $teacher->viewProfile();
}elseif (isset($_POST['viewCourseDetails'])) {
    $teacher->viewCourseDetails();
}else{
    //echo "55555555";
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
    <h4> You are logged as <?php echo $teacher->getName(); ?></h4>


    <div class = "top-bar">

        <h1>Ravi Costructions</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>
    </div>
    <div class="main">
        <p><h3><u>Teacher's Home</u></h3></p>
        <div class="intro">
            <div class="introText">
                <form action="" method="post">
                    <ul>
                        <li><button type ="submit" name="viewProfile"><p>VIEW PROFILE</p></button></li>
                        <li><button type ="submit" name="editProfile"><p>EDIT PROFILE</p></button></li>
                        <li><button type ="submit" name="viewCourseDetails"><p>VIEW COURSE DETAILS</p></button></li>
                        <li><button type ="submit" name="enterMarks"><p>ENTER STUDENTS' MARKS</p></button></li>
                        <li><button type ="submit" name="viewStudentReport"><p>VIEW STUDENT'S REPORTS</p></button></li>
                    </ul>
                </form>
                <?php 
                if (isset($_POST['enterMarks'])) {
                    header("location: EnterMark.php?usr=".$teacher->getName()."&ty=".'teacher');
                }
                ?>
            </div>
            <div class="introImage">
                <img src="../img/images.jpg" alt="your photo"/>
            </div>
        </div>
    </div>
    <div class="final">
        <a href="index.php">Log Out</a>
    </div>

</div>
</body>
</html>