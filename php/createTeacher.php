<!DOCTYPE html>

<?php

$db = mysqli_connect('localhost','root','','ravi');
if(mysqli_connect_errno()){
    die("".mysqli_connect_error()."(".mysqli_connect_errno().")");
}

if (isset($_POST['submit']))
{

    $Name = ($_POST['Name']);
    $Address = ($_POST['Address']);
    $NIC = ($_POST['NIC']);
    $DateOfBirth = ($_POST['DateOfBirth']);
    $JoinedDate = ($_POST['JoinedDate']);
    $ContactNo = ($_POST['ContactNo']);
    $Gender = ($_POST['Gender']);
    $Course = ($_POST['Course']);
    $Email = ($_POST['Email']);
    $ID = ($_POST['ID']);
    $Password1 = ($_POST['Password1']);
    $Password2 = ($_POST['Password2']);
    $UserName = ($_POST['UserName']);


    $query = ("INSERT INTO teacher (Name,Address,NIC,DateOfBirth,JoinedDate,ContactNo,Gender,Course,Email,ID,Password1,Password2,UserName) VALUES ('$Name', '$Address','$NIC','$DateOfBirth','$JoinedDate','$ContactNo','$Gender','$Course','$Email','$ID','$Password1','$Password2','$UserName')");


    if(mysqli_query($db,$query))
    {
        echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
    }
    else
    {
        echo "<script>alert('FAILED TO INSERT');</script>";
    }

}
mysqli_close($db);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Teacher Account</title>
    <link rel="stylesheet" type="text/css" href="../css/createTeacher.css"/>
</head>
<body>
<div class = "wrpper">



    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <ul>

            <form action="" method="POST">
                <ul>
                    <li>
                        <label for="Name">Teacher Name : </label>
                        <input type ="text" id="Name" name="Name" /> <br/>
                    </li>
                    <li>
                        <label for="Address">Address: </label>
                        <input type="text" id="Address" name="Address" /><br/>
                    </li>
                    <li>
                        <label for="NIC">NIC : </label>
                        <input type ="text" id="NIC" name="NIC" /> <br/>
                    </li>
                    <li>
                        <label for="DateOfBirth">Date of Birth: </label>
                        <input type="date" id="DateOfBirth" name="DateOfBirth" /><br/>
                    </li>
                    <li>
                        <label for="JoinedDate">Joined Date: </label>
                        <input type="date" id="JoinedDate" name="JoinedDate" /><br/>
                    </li>
                    <li>
                        <label for="ContactNo">Contact Number : </label>
                        <input type ="number" id="ContactNo" name="ContactNo" /> <br/>
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
                    <li>
                        <tr >
                            <TD>Course :</TD>
                            <TD><select name="Course">
                                    <option value="BL" selected >Backhoe Loader</option>
                                    <option value="EWB"  >Excavator With Breaker</option>
                                    <option value="MG"  >Moter Grader</option>
                                </select></TD>
                        </tr>

                    </li>
                    <li>
                        <label for="Email">E-Mail: </label>
                        <input type="text" id="Email" name="Email" /><br/>
                    </li>
                    <li>
                        <label for="ID">Teacher ID : </label>
                        <input id="ID" name="ID" />
                    </li>
                    <li>
                        <label for="Password1">Password : </label>
                        <input id="Password1" name="Password1" />
                    </li>
                    <li>
                        <label for="Password2">Confirm Password : </label>
                        <input id="Password2" name="Password2" />
                    </li>
                    <li>
                        <label for="UserName">UserName : </label>
                        <input id="UserName" name="UserName" />
                    </li>

                </ul>
                <button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
            </form>

        </ul>
    </div>

</div>

</body>
</html>





























































