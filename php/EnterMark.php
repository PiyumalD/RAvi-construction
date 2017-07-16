<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students' marks</title>
    <link rel="stylesheet" type="text/css" href="../css/attendance.css"/>
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as <?php echo $_GET['usr']; ?> </h4>

    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINARY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">

        <p><h3><u>Enter Students' marks</u></h3></p>
        <?php 
        echo  " <form action='' method=post>
            <ul>
                <li>
                    <label for=Course>Student's Index Number : </label>
                    <input id=Course type=text name=Index />
                </li>
                <li>
                    <label for=Course>Course Name : </label>
                    <input id=Course type=text name=Course />
                </li>
                <li>
                    <label for=Batch>Batch : </label>
                    <input id=Batch type=number name=Batch />
                </li>
                <li>
                    <label for=date>Date : </label>
                    <input id=date name=date type=date/>
                </li>
                <li>
                    <label for=PracNo>PracticalNo : </label>
                    <input id=PracNo name=PracNo type=number/>
                </li>
                <li>
                    <label>Enter the marks: </label>
                    <input id=marks type=number name=Marks />
                </li>
                
            </ul>
            <button name=Save type=submit value=abc> Save </button>
        </form>";
        ?>
    </div>
    <li> <?php echo "<a href=Home_".$_GET['ty'].".php> >>Home>></a>"; ?> </li>
    <li> <a href="index.php"> >>Logout>></a></li>
</div>
<?php  
if (isset($_POST['Save']) && !empty($_POST['Index']) && !empty($_POST['PracNo']) && !empty($_POST['Marks']) ) {
    $UsrNam=$_POST['Index'];
    $Marks=$_POST['Marks'];
    $conn2 = mysqli_connect('localhost','root','Whishana@2366','ravi');
    if ($_POST['PracNo']==='1') {
        $Prac='PA_1';
    }elseif ($_POST['PracNo']==='2') {
        $Prac='PA_2';
    }elseif ($_POST['PracNo']==='3') {
        $Prac='PA_3';
    }elseif ($_POST['PracNo']==='4') {
        $Prac='PA_4';
    }elseif ($_POST['PracNo']==='5') {
        $Prac='PA_5';
    }else{
        ?>
        <script type="text/javascript">
        alert("error in the practical number....");
        </script>
        <?php
    }
    $query = "UPDATE student SET $Prac='$Marks' WHERE UserName='$UsrNam'";
    $result = mysqli_query($conn2,$query);
    if (!$result) {
        die("database query failed...");
    }
}elseif(isset($_POST['Save'])){
    ?>
    <script type="text/javascript">
    alert("problem in field data entering....");
    </script>
    <?php
}else{

}

?>

</body>
</html>

