<?php
include ('Teacher.php');
session_start();
$user = unserialize($_SESSION['user']);
if(isset($_POST['submit']))
{   $id=$user->getId();
    $conn= new mysqli('localhost','root','','ravi construction');
    if ($_POST['Password1'] != $_POST['Password2']){
        echo "<script>alert('PASSWORDS DO NOT MATCHED!');</script>";
    }else {
        if ($_POST['Name'] != $user->getName()) {
            $user->setName($_POST['Name']);
            $name = $_POST['Name'];
            $sql = "UPDATE teachers SET Name= '$name' WHERE id = '$id'";
            mysqli_query($conn, $sql);

        }
        if ($_POST['Address'] != $user->getAddress()) {
            $user->setAddress($_POST['Address']);
            $Address = $_POST['Address'];
            $sql = "UPDATE teachers SET Address= '$Address' WHERE id = '$id'";
            mysqli_query($conn, $sql);

        }
        if ($_POST['NIC'] != $user->getNic()) {
            $user->setNic($_POST['NIC']);
            $NIC = $_POST['NIC'];
            $sql = "UPDATE teachers SET NIC= '$NIC' WHERE ID = '$id'";
            mysqli_query($conn, $sql);

        }
        if($_POST['DateOfBirth'] != $user->getDateOfBirth()){
        $user->setDateOfBirth($_POST['DateOfBirth']);
        $dateOfBirth = $_POST['DateOfBirth'];
        $sql = "UPDATE teachers SET DateOfBirth= '$dateOfBirth' WHERE id = '$id'";
        mysqli_query($conn, $sql);

    }
        if ($_POST['ContactNo'] != $user->getContactNo()) {
            $user->setContactNo($_POST['ContactNo']);
            $ContactNo = $_POST['ContactNo'];
            $sql = "UPDATE teachers SET Contact = '$ContactNo' WHERE id = '$id'";
            mysqli_query($conn, $sql);

        }
        if ($_POST['Email'] != $user->getEmail()) {
            $user->setEmail($_POST['Email']);
            $Email = $_POST['Email'];
            $sql = "UPDATE teachers SET Email= '$Email' WHERE id = '$id'";
            mysqli_query($conn, $sql);

        }
        if ($_POST['Password1'] != $user->getPassword()) {
            $user->setPassword($_POST['Password1']);
            $Password = $_POST['Password1'];
            $sql = "UPDATE teachers SET Password= '$Password' WHERE id = '$id'";
            mysqli_query($conn, $sql);


        }

    }

    if(!$conn )
    {
        die('Could not connect: ');
    }


    //$sql = "UPDATE students SET Name= '$Name' WHERE id = '$UserName'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
    }
    else
    {
        echo "<script>alert('FAILED TO INSERT');</script>";
    }


    mysqli_close($conn);
}
?>
<html>

<head>
    <title>Update a Record in MySQL Database</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="../css/updateStudent.css"/>
</head>
<body>
<div class = "wrpper">

    <h4> You are logged as <?php echo $user->getName()?> </h4>

    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Profile</u></h3></p>

        <ul>
            <form action="" method="POST">

                <ul>
                    <li>
                        <label for="Name">Student Name : </label>

                        <input type ="text" id="Name" name="Name" required value=<?php echo $user->getName();?> /> <br/>
                    </li>
                    <li>
                        <label for="Address">Address: </label>
                        <input type="text" id="Address" name="Address" required  value=<?php echo ($user->getAddress());?> /><br/>
                    </li>
                    <li>
                        <label for="NIC">NIC : </label>
                        <input type ="text" id="NIC" name="NIC" required value=<?php echo $user->getNic();?> /> <br/>
                    </li>
                    <li>
                        <label for="DateOfBirth">Date of Birth: </label>
                        <input type="date" id="DateOfBirth" name="DateOfBirth" required value=<?php echo $user->getDateOfbirth();?> /><br/>
                    </li>
                    <li>
                        <label for="JoinedDate"><b>Joined Date :</b></label>
                        <label id="JoinedDate"><?php echo $user->getJoinedDate();?></label>
                    </li>
                    <li>
                        <label for="ContactNo">Contact Number : </label>
                        <input type ="tel" id="ContactNo" name="ContactNo" required value=<?php echo $user->getContactNo();?>  /> <br/>
                    </li>
                    <li>
                        <tr >
                            <TD>Gender</TD>
                            <TD><select name="Gender">
                                    <option value="M" selected >Male</option>
                                    <option value="F"  >Female</option>
                                </select></TD>
                        </tr>

                    </li>
                    <!--        <li>-->
                    <!--            <tr >-->
                    <!--                <TD>Course :</TD>-->
                    <!--                <TD><select name="Course">-->
                    <!--                        <option value="BL" selected >Backhoe Loader</option>-->
                    <!--                        <option value="EWB"  >Excavator With Breaker</option>-->
                    <!--                        <option value="MG"  >Moter Grader</option>-->
                    <!--                    </select></TD>-->
                    <!--            </tr>-->
                    <!---->
                    <!--        </li>-->
                    <li>
                        <label for="Email">E-Mail: </label>
                        <input type="email" id="Email" name="Email" required value=<?php echo $user->getEmail();?>  /><br/>
                    </li>
                    <li>
                        <label for="Password1">Password : </label>
                        <input type="password" id="Password1" name="Password1" required value=<?php echo $user->getPassword();?>  />
                    </li>
                    <li>
                        <label for="Password2">Confirm Password : </label>
                        <input type="password" id="Password2" name="Password2" required value=<?php echo $user->getPassword();?> />
                    </li>
                    <!--        <li>-->
                    <!--            <label for="UserName">UserName : </label>-->
                    <!--            <input id="UserName" name="UserName" required />-->
                    <!--        </li>-->

                </ul>
                <button type ="submit" name="submit" value="send to database"> UPDATE</button>
            </form>
        </ul>
    </div>
    <li> <a href="#"> >>Home>></a></li>
    <li> <a href="#"> >>Logout>></a></li>
</div>

</body>
</html>
