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
    $Email = ($_POST['Email']);
    $UserName = ($_POST['UserName']);
    $Password1 = ($_POST['Password1']);
    $Password2 = ($_POST['Password2']);

    if ($Password1 != $Password2){
        echo "<script>alert('PASSWORDS DO NOT MATCHED!');</script>";
    }else {

        $query = ("INSERT INTO dataOpertaor (Name,Address,NIC,DateOfBirth,JoinedDate,ContactNo,Gender,Email,Password1,Password2,UserName) VALUES ('$Name', '$Address','$NIC','$DateOfBirth','$JoinedDate','$ContactNo','$Gender','$Email','$Password1','$Password2','$UserName')");

        if(mysqli_query($db,$query))
        {
            echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
        }
        else
        {
            echo "<script>alert('FAILED TO INSERT');</script>";
        }

    }

}
mysqli_close($db);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create DataOperator Account</title>
    <link rel="stylesheet" type="text/css" href="../css/dataOperator.css"/>
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
                        <label for="Name">Name : </label>
                        <input type ="text" id="Name" name="Name" required /> <br/>
                    </li>
                    <li>
                        <label for="Address">Address: </label>
                        <input type="text" id="Address" name="Address" required /><br/>
                    </li>
                    <li>
                        <label for="NIC">NIC : </label>
                        <input type ="text" id="NIC" name="NIC" required /> <br/>
                    </li>
                    <li>
                        <label for="DateOfBirth">Date of Birth: </label>
                        <input type="date" id="DateOfBirth" name="DateOfBirth" required /><br/>
                    </li>
                    <li>
                        <label for="JoinedDate">Joined Date: </label>
                        <input type="date" id="JoinedDate" name="JoinedDate" required /><br/>
                    </li>
                    <li>
                        <label for="ContactNo">Contact Number : </label>
                        <input type ="tel" id="ContactNo" name="ContactNo" required /> <br/>
                    </li>
                    <li>
                        <tr >
                            <TD>Gender</TD>
                            <TD><select name="Gender">
                                    <option value="M" selected >Male</option>
                                    <option value="F"  >Female</option>
                                </select></TD>
                        </tr>

                    <li>
                        <label for="Email">E-Mail: </label>
                        <input type="email" id="Email" name="Email" required /><br/>
                    </li>
                    <li>
                        <label for="Password1">Password : </label>
                        <input type="password" id="Password1" name="Password1" required />
                    </li>
                    <li>
                        <label for="Password2">Confirm Password : </label>
                        <input type="password" id="Password2" name="Password2" required />
                    </li>
                    <li>
                        <label for="UserName">UserName : </label>
                        <input id="UserName" name="UserName" required />
                    </li>

                </ul>
                <button type ="submit" name="submit" value="send to database"> Create </button>
            </form>

        </ul>
    </div>

</div>

</body>
</html>





























































