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
    <link rel="stylesheet" type="text/css" href="../css/View%20profile.css"/>
</head>
<body>
<div class = "wrpper">

    <h4> You are logged as <?php echo $user->getUserName(); ?> </h4>

    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Profile</u></h3></p>

        <ul>

            <li>
                <label for="Name"><b>Name :</b></label>
                <label id="Name"><?php echo $user->getName();?></label>
            </li>
            <li>
                <label for="NIC"><b>NIC :</b></label>
                <label id="NIC"><?php echo $user->getNIC();?></label>
            </li>
            <li>
                <label for="DateOfBirth"><b>Date of Birth :</b></label>
                <label id="DateOfBirth"><?php echo $user->getDateOfBirth();?></label>
            </li>
            <li>
                <label for="Gender"><b>Gender :</b></label>
                <label id="Gender"><?php echo $user->getGender();?></label>
            </li>
            <li>
                <label for="Address"><b>Address :</b></label>
                <label id="Address"><?php echo $user->getAddress();?></label>
            </li>
            <li>
                <label for="E-mail"><b>E-mail :</b></label>
                <label id="E-mail"><?php echo $user->getEmail();?></label>
            </li>
            <li>
                <label for="ContactNo"><b>Contact No :</b></label>
                <label id="ContactNo"><?php echo $user->getContactNo();?></label>
            </li>
            <li>
                <label for="Course"><b>Course :</b></label>
                <label id="Course"><?php echo $user->getCourse();?></label>
            </li>
            <li>
                <label for="JoinedDate"><b>Joined Date :</b></label>
                <label id="JoinedDate"><?php echo $user->getJoinedDate();?></label>
            </li>
            <li>
                <label for="Teacher ID"><b>User Name :</b></label>
                <label id="Teacher ID"><?php echo $user->getUserName();?></label>
            </li>

        </ul>
    </div>
    <li> <a href="Home_teacher.php"> >>Home>></a></li>
    <li> <a href="index.php"> >>Logout>></a></li>
</div>

</body>
</html>
