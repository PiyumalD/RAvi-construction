<?php require_once("../includes/functions.php"); ?>
<?php 
    $dbhost='127.0.0.1';
    $dbuser='Ravi';
    $dbpass='secretpassword';
    $dbname='Ravi_Cons';
    $connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if (mysqli_connect_errno()) {
        # code...
        die("database connection fail.. ".mysqli_connection_error()." (".mysqli_connect_errno().")");
    }
    
?>
<!DOCTYPE html>
<html >
<head>
    <title>create account</title>
    <link rel="stylesheet" type="text/css" href="../css/createAcc.css">
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
            <div class = "type_clearfix">
                <form name="form1" action= "" method="post">
                    <table>
                        <tr>
                            <td class="first">
                                Account Type :
                            </td>
                            <td class="second">
                            <select name="taskOption">
                                <option selected="selected" disabled="disabled">select type</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Reception">Reception</option></select>
                            </td>
                            <td class="last">
                                <input type="submit" value="create account" name="btn" class="last" id="btnHome"/>
                                <?php 
                                    if (isset($_POST['btn'])) {
                                        $select1 = $_POST['taskOption'];
                                        switch ($select1) {
                                            case 'Student':
                                                redirect_to("createStudent.html");
                                                break;
                                            case 'Teacher':
                                                redirect_to("createTeacher.html");
                                                break;
                                            case 'Reception':
                                                redirect_to("createReception.html");
                                                break;
                                            default:
                                                # code...
                                                redirect_to("emptyPage.html");
                                                break;
                                        }
                                    };
                                ?>
                            </td>
                            
                        </tr>
                    </table>
                </form>
        </div>
</div>
</body>
</html>

