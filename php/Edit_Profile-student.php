<!DOCTYPE html>

<?php
$id='1';

$mysqli=new mysqli('localhost','root','','editprofilestudent');
$query=$mysqli->query("select *from student WHERE id=$id");
$row=$query->fetch_assoc();


if(isset($_POST['btn'])){



    $name = $_POST['name'];
    $Address = $_POST['Address'];
    $ContactNo = $_POST['ContactNo'];
    $Email = $_POST['Email'];
    $Password= $_POST['Password'];
    $ConfirmPassword =$_POST['ConfirmPassword'];



    $query = ("INSERT INTO student
 (Name,Address,ContactNo,Email,Password,ConfirmPassword,) VALUES ('$name', '$Address','$ContactNo','$Email','$Password','$ConfirmPassword')");


    if(mysqli_query($mysqli,$query))
    {
        echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
    }
    else
    {
        echo "<script>alert('FAILED TO INSERT');</script>";
    }

}
mysqli_close($mysqli);
?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit profile</title>
    <link rel="stylesheet" type="text/css" href="../css/Edit_Profile-student.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as Student 1 </h4>

    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>Edit Profile</u></h3></p>

        <div class="Edit">
            <div class="Edit-profile">

                <div class=" personal-info">

                    <p>Personal Information</p>


                    <div class="field">
                        <label class="name">Name   :</label>

                        <input class="name" type="text"name="name" value="<?php echo ''?>">

                    </div>
                    <div class="field">
                        <label class="Address">Address  :</label>

                        <input class="Address" type="text" name="Address" value="<?php echo ''?>">

                    </div>

                    <div class="field">
                        <label class="email">Email    :</label>

                        <input class="email" type="text"name="Email" value="<?php echo ''?>">

                    </div>

                    <div class="field">
                        <label class="ContactNo">Contact No :</label>

                        <input class="ContactNo" type="text" name="ContactNo" value="<?php echo ''?>">

                    </div>
                    <div class="field">
                        <label class="password">Password  :</label>

                        <input class="password" type="password" name="Password" value="<?php echo ''?>">

                    </div>
                    <div class="field">
                        <label class="confirm-password">Confirm password:</label>

                        <input class="confirm-password" type="password"name="ConfirmPassword" value="<?php echo ''?>">

                    </div>
                    <div class="field">
                        <label class="save-button"></label>
                        <div class="text1">
                            <input type="button" class="btn btn-primary" name="btn" value="Update">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>


                </div>

            </div>

        </div><!--Edit-->

    </div>
</div>
</body>
</html>