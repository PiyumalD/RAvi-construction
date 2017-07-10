<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Report</title>
    <link rel="stylesheet" type="text/css" href="../css/View%20profile.css"/>
</head>
<body>
<div class = "wrpper">

    <h4> You are logged as Teacher 1 </h4>

    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Profile</u></h3></p>

        <ul>

            <?php

            $UserName=1;
            $conn= new mysqli('localhost','root','','ravi');

            $stmt=$conn->query("select * from teacher where id='{$UserName}'");
            $row=$stmt->fetch_assoc();


            ?>

            <li>
                <label for="Name"><b>Name :</b></label>
                <label id="Name"><?php echo $row['Name'];?></label>
            </li>
            <li>
                <label for="NIC"><b>NIC :</b></label>
                <label id="NIC"><?php echo $row['NIC'];?></label>
            </li>
            <li>
                <label for="DateOfBirth"><b>Date of Birth :</b></label>
                <label id="DateOfBirth"><?php echo $row['DateOfBirth'];?></label>
            </li>
            <li>
                <label for="Gender"><b>Gender :</b></label>
                <label id="Gender"><?php echo $row['Gender'];?></label>
            </li>
            <li>
                <label for="Address"><b>Address :</b></label>
                <label id="Address"><?php echo $row['Address'];?></label>
            </li>
            <li>
                <label for="E-mail"><b>E-mail :</b></label>
                <label id="E-mail"><?php echo $row['Email'];?></label>
            </li>
            <li>
                <label for="ContactNo"><b>Contact No :</b></label>
                <label id="ContactNo"><?php echo $row['Name'];?><?php echo $row['ContactNo'];?></label>
            </li>
            <li>
                <label for="Course"><b>Course :</b></label>
                <label id="Course"><?php echo $row['Course'];?></label>
            </li>
            <li>
                <label for="JoinedDate"><b>Joined Date :</b></label>
                <label id="JoinedDate"><?php echo $row['JoinedDate'];?></label>
            </li>
            <li>
                <label for="Teacher ID"><b>User Name :</b></label>
                <label id="Teacher ID"><?php echo $row['UserName'];?></label>
            </li>

        </ul>
    </div>
    <li> <a href="#"> >>Home>></a></li>
    <li> <a href="#"> >>Logout>></a></li>
</div>

</body>
</html>
