<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Report</title>
    <link rel="stylesheet" type="text/css" href="../css/View-marks.css"/>
</head>
<body>
<div class = "wrpper">

    <h4> You are logged as Student 1 </h4>

    <div class = "top-bar">
        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>View Marks</u></h3></p>

        <ul>
            <style>
                table, th, td {
                    border: 1px solid black;
                }
            </style>


            <table>
                <tr>
                    <th>Practical No</th>
                    <th>Marks</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td><?php session_start(); echo $_SESSION['Prac1'];?></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td><?php echo $_SESSION['Prac2'];?></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td><?php echo $_SESSION['Prac3'];?></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td><?php echo $_SESSION['Prac4'];?></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td><?php echo $_SESSION['Prac5'];?></td>
                </tr>

            </table>
            <ul>
                <li>
                    <label for="Total"><b>Total Marks :</b></label>
                    <label id="Total"><?php echo $_SESSION['Total'];?></label>
                </li>

            </ul>




        </ul>
    </div>
    <li> <a href="Home_student.php"> >>Home>></a></li>
    <li> <a href="index.php"> >>Logout>></a></li>
</div>

</body>
</html>






















