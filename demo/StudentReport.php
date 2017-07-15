<?php
include 'Teacher.php';
include 'Student.php';
session_start();
$user1 = unserialize($_SESSION['user1']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Report</title>
    <link rel="stylesheet" type="text/css" href="../css/StudentReport.css"/>
</head>
<body>

<div class = "wrpper">

    <h4> You are logged as Teacher</h4>


    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->


    <div class="main">

        <p><h3><u>Student Report</u></h3></p>

        <ul>
            <li>
                <label for="Index1"><b>Index No :</b></label>
                <label id="Index1"><?php echo $user1->getUsername();?></label>
            </li>
            <li>
                <label for="Student's Name"><b>Student's name :</b></label>
                <label id="Student's Name"><?php echo $user1->getName();?></label>
            </li>
            <li>
                <label for="NIC no"><b>NIC no :</b></label>
                <label id="NIC no"><?php echo $user1->getNic();?></label>
            </li>
            <li>
                <label for="Address"><b>Address :</b></label>
                <label id="Address"><?php echo $user1->getAddress();?></label>
            </li>
            <li>
                <label for="Contact no"><b>Contact no :</b></label>
                <label id="Contact no"><?php echo $user1->getContactNo();?></label>
            </li>

            <li>
                <label for="Course"><b>Course :</b></label>
                <label id="Course"><?php echo $user1->getCourse();?></label>
            </li>

            <li>
                <label><b> Marks : </b></label></li>
            <table border="1" cellspacing='0' cellpadding='0' class='boxaligncenter generaltable user-grade'>
                <thead>
                <tr>
                    <th class="header" colspan='2'> Practical no </th>
                    <th class="header"> Marks </th>
                    <th class="header"> Feedback </th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class=' oddd1 b1t b2b b1l' rowspan='7'></td>
                <tr>
                    <td class='  item b1b' colspan='1'>01</td>
                    <td class='  item b1b itemcenter ' ><?php echo $user1->getPrac1();?></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>02</td>
                    <td class='  item b1b itemcenter ' ><?php echo $user1->getPrac2();?></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>03</td>
                    <td class='  item b1b itemcenter ' ><?php echo $user1->getPrac3();?></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>04</td>
                    <td class='  item b1b itemcenter ' ><?php echo $user1->getPrac4();?></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>05</td>
                    <td class='  item b1b itemcenter ' ><?php echo $user1->getPrac5();?></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
            </table>

            <li>
                <label for="Total marks"><b>Total marks :</b></label>
                <label id="total marks"></label>
            </li>
            <li>
                <label for="Current percentage"><b>Current Percentage :</b></label>
                <label id="current percentage"></label>
            </li>



        </ul>

    </div>
    <li> <a href="Home_teacher.php"> >>Home>></a></li>
    <li> <a href="View_Report.php"> >>Back>></a></li>
    <li> <a href="index.php"> >>Logout>></a></li>

</div>
</body>
</html>