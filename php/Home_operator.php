
<?php
include 'DataOperator.php';
$user="";
session_start();
$user = $_SESSION['user'];
$operator = new DataOperator($user);

if(isset($_POST['viewProfile'])){
    $operator->viewProfile();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Teacher Home</title>
    <link rel="stylesheet" type="text/css" href="../css/teachHome.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as <<?php $_SESSION['Name']; ?></h4>


    <div class = "top-bar">

        <h1>Ravi Costructions</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2

        <div class="main">

            <p><h3><u>Data Operator's Home</u></h3></p>

            <form action="" method="post">

                <button type ="submit" name="viewProfile">VIEW PROFILE</button>
                <button type ="submit" name="viewProfile">EDIT PROFILE</button>
                <button type ="submit" name="viewProfile">VIEW COURSE DETAILS</button>
                <button type ="submit" name="viewProfile">ENTER STUDENTS' ATTENDANCE</button>
                <button type ="submit" name="viewProfile">CREATE NEW ACCOUNT</button>
                <button type ="submit" name="viewProfile">ENTER STUDENTS' MARKS</button>
                

            </form>
            <?php 
            if (isset($_POST['VIEW COURSE DETAILS'])) {?>
                <div class="navigation">
                    <?php 
                    $response_operator=$operator->viewCourseDetails(); 
                    $row=mysqli_fetch_array($response_operator);
                    while($row=mysqli_fetch_array($response)){
                        echo '<tr><td align="left">'.$row['Course_Name'].'</td><td align="left">'.$row['Starting_Date'].'</td><td align="left">'.$row['Ending_Date'].'</td>';
                        echo '</tr>';
                    }
                    ?>
                </div>
                $query="SELECT * FROM  courses_updatecourses";
                $response=@mysqli_query($conn,$query);
                return $response;
            <?php } ?>
        </div>
</body>
</html>