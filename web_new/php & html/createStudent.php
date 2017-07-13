<?php require_once("../includes/functions.php"); ?>
<?php 
    // print_r($_POST);
    // echo "5353534535";
    if (isset($_POST['btn'])) {
        # code...
        print_r($_POST);
        // echo "feobfnhebfwof";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>create student account</title>
    <link rel="stylesheet" type="text/css" href="../css/createStudent.css">
</head>
<body>
<div class = "wrpper">
    <div class = "top-bar">
        <h1>Ravi Heavy Machinary Equipment Traning Institute</h1>
        <h2>Aluthwala, Ambalangoda.</h2>
    </div>
    <div class="main">
        <div class="TP_numbers">
                T.P. :
                <div class="numbers">
                    091 4944070 <br>
                    091 7201163 <br>
                    091 7201162 <br>
                </div>
            </div><br>
            <div class="other_content">
                FAX : 091 4944070<br>
                E-mail : <a href="#">raviconstruction@gmail.com</a>
            </div>
    </div>
    <hr>
    <div class = "type_clearfix">
                <form name="form1" action="" method="post">
                    <ul>
                        <li>
                            <label for="Name">Student's Name : </label>
                            <input type ="text" id="Name" name="Name" /> <br/>
                        </li>
                        <li>
                            <label for="address">Address: </label>
                            <input type="text" id="address" name="address" /><br/>
                        </li>
                        <li>
                            <label for="nic">NIC : </label>
                            <input type ="text" id="nic" name="nic" /> <br/>
                        </li>
                        <li>
                            <label for="birth">Date of Birth: </label>
                            <input type="date" id="birth" name="birth" /><br/>
                        </li>
                        <li>
                            <label for="contact">Contact Number : </label>
                            <input type ="tel" id="contact" name="contact" minlength="10" maxlength="12" /> <br/>
                        </li>
                        <li>
                            <tr class="first">
                                <TD>Gender:</TD>
                                <TD><select class="gender" name="taskOptionGender">
                                    <option value="M" selected >Male</option>
                                    <option value="F"  >Female</option>
                                </select></TD>
                            </tr>

                        </li>
                        <li>
                            <tr >
                                <TD>Course:</TD>
                                <TD><select class="course" name="taskOptionCourse">
                                    <option value="BL" selected >Backhoe Loader</option>
                                    <option value="EWB"  >Excavator With Breaker</option>
                                    <option value="MG"  >Moter Grader</option>
                                </select></TD>
                            </tr>

                        </li>
                        <li>
                            <label for="email">E-Mail: </label>
                            <input type="email" id="email" name="email" /><br/>
                        </li>
                        <li>
                            <label for="StudentID">Student ID : </label>
                            <input id="StudentID" name="StudentID" type="text" />
                        </li>
                        <input type="submit" value="create account" name="btn" class="last" id="btnHome" onclick="alert('are you sure!!')"/>
                            <?php 
                                if (isset($_POST['btn'])) {
                                    $select1 = isset($_POST['taskOptionGender']) && isset($_POST['taskOptionCourse']) && isset($_POST['email']) && isset($_POST['Name']) && isset($_POST['address']) && isset($_POST['nic']) && isset($_POST['birth']) && isset($_POST['contact']) && isset($_POST['StudentID']);
                                    echo $select1;
                                    // if($select1){
                                    //     redirect_to("createTeacher.html");

                                    // }else{
                                    //     redirect_to("emptyPage.php");
                                    // }
                                };
                            ?>
                    </ul>
                </form>
            </div><!--detail-->
</div>
</body>
</html>





