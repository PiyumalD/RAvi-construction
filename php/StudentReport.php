<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Report</title>
    <link rel="stylesheet" type="text/css" href="../css/StudentReport.css"/>
</head>
<body>

<div class = "wrpper">

    <h4> You are logged as Teacher 1 </h4>


    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->


    <div class="main">

        <p><h3><u>Student Report</u></h3></p>

        <ul>

            <?php

            $UserName=1;
            $conn= new mysqli('localhost','root','','ravi');

            $stmt=$conn->query("select * from  student where id='{$UserName}'");
            $row=$stmt->fetch_assoc();

            ?>

            <li>
                <label for="Index"><b>Index No :</b></label>
                <label id="Index"><?php session_start(); echo $_SESSION['UserName'];?></label>
            </li>
            <li>
                <label for="Student's Name"><b>Student's name :</b></label>
                <label id="Student's Name"><?php echo $_SESSION['Name'];?></label>
            </li>
            <li>
                <label for="NIC no"><b>NIC no :</b></label>
                <label id="NIC no"><?php echo $_SESSION['NIC'];?></label>
            </li>
            <li>
                <label for="Address"><b>Address :</b></label>
                <label id="Address"><?php echo $_SESSION['Address'];?></label>
            </li>
            <li>
                <label for="Contact no"><b>Contact no :</b></label>
                <label id="Contact no"><?php echo $_SESSION['ContactNo'];?></label>
            </li>

            <li>
                <label for="Course"><b>Course :</b></label>
                <label id="Course"><?php echo $_SESSION['Course'];?></label>
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
                    <td class='  item b1b itemcenter ' ></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>02</td>
                    <td class='  item b1b itemcenter ' ></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>03</td>
                    <td class='  item b1b itemcenter ' ></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>04</td>
                    <td class='  item b1b itemcenter ' ></td>
                    <td class='  item b1b itemcenter ' ></td>
                </tr>
                <tr>
                    <td class='  item b1b' colspan='1'>05</td>
                    <td class='  item b1b itemcenter ' ></td>
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
    <li> <a href="Home_teacher.html"> >>Home>></a></li>
    <li> <a href="View_Report.html"> >>Back>></a></li>
    <li> <a href="#"> >>Logout>></a></li>

</div>
</body>
</html>