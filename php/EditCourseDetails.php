<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit course details</title>
	<link rel="stylesheet" type="text/css" href="../css/EditCourseDetails.css">
</head>
<body>
<div class = "wrpper">
    <h4> You are logged as</h4>

    <div class = "top-bar">

        <h1>RAVI CONSTRUCTIONS</h1>
        <h2>RAVI HEAVY MACHINERY EQUIPMENT TRAINING INSTITUTE</h2>

    </div><!--top-bar-->

    <div class="main">
    <?php 
    $_POST['length']=true;
    if ($_GET['index']==='1') {
        $CourseName='Backhoe Loader';
    }elseif($_GET['index']==='2') {
        $CourseName='Excavator With Breaker';
    }else{
    	$CourseName='Moter Grader';
    }
    $conn2 = mysqli_connect('localhost','root','Whishana@2366','ravi');
    $query = "SELECT * FROM courses WHERE CourseName='$CourseName'";
    $result = mysqli_query($conn2,$query);
    if (!$result) {
        die("database query failed...");
    }
    while($data = mysqli_fetch_assoc($result)){
        $_SESSION['CourseName']=$data['CourseName'];
        $_SESSION['Starting_Date']=$data['Starting_Date'];
        $_SESSION['Ending_Date']=$data['Ending_Date'];
        $_SESSION['Batch']=$data['Batch'];
        $_SESSION['NoOfStudents']=$data['NoOfStudents'];
        $_SESSION['TeacherName']=$data['TeacherName'];
        echo $data['CourseName'].'---------'.$data['Starting_Date'].'---------'.$data['Ending_Date'];
        //var_dump($data);
        //echo "<hr/>";
    }
    $checkre=false;
    ?>
    
    	<form action="" method="post">
        <p><h3><u>edit Course Details</u></h3></p>
        <hr>
        <?php  
        echo "<ul>";
        $checkre=true;
        echo  "<li>
                <label for=Course Name>Course Name : </label><h6>".  $_SESSION['CourseName']."</h6><br>

            </li>";
        echo   "<li>
                <label for=startingDate>Starting Date :</label><input type=text name=StrDat value='". $_SESSION['Starting_Date']."'><br>

            </li>";
        echo   "<li>
                <label for=endingDate> Ending Date :</label><input type=text name=EndDat value='". $_SESSION['Ending_Date']."'><br>

            </li>";
        echo    "<li>
                <label for=batch > Batch :</label><input type=text name=Bat value='".$_SESSION['Batch']."'><br>

            </li>";
        echo    "<li>
                <label for=numberOfStudents> Number of Students :</label><input type=text name=Stud value='".$_SESSION['NoOfStudents']."'><br>

            </li>";
        echo    "<li>
                <label for=teacherName > Teacher's Name :</label><input type=text name=TeaNam value='".$_SESSION['TeacherName']."'><br>

            </li>";

        echo "</ul>";
        ?>
        <hr>
        <button type="submit" value="Submit">Submit</button>
    	<button type="reset" value="Reset">Reset</button>
        </form>
        <?php  
        $conn2 = mysqli_connect('localhost','root','Whishana@2366','ravi');
        // echo "<br> $_POST[\"StrDat\"]";
        

        if (strlen('$_POST[Bat]')<=4 && strlen('$_POST[Stud]')<=5 && strlen('$_POST[TeaNam]')<=20) {
        	$_POST['length']=true;
        	$query = "UPDATE courses SET Starting_Date='$_POST[StrDat]',Ending_Date='$_POST[EndDat]',Batch='$_POST[Bat]',NoOfStudents='$_POST[Stud]',TeacherName='$_POST[TeaNam]' WHERE ";
		    if ($CourseName==='Backhoe Loader'){
		    	$query .="CourseName=\"Backhoe Loader\"";
	    	}elseif($CourseName==='Excavator With Breaker') {
	    		$query .="CourseName=\"Excavator With Breaker\"";
	    	}else{
	    		$query .="CourseName=\"Moter Grader\"";
	    	}
		    $result = mysqli_query($conn2,$query);
		    if (!$result) {
		        echo '<script type="text/javascript">';
			    echo'alert("database query failed...");';
			    echo 'window.location= "Home_operator.php"';
			    echo '</script>';
			}
        }else{
        	$_POST['length']=false;
        }


	    
	    // }elseif ($checkre && $result) {
	    // 	echo '<script type="text/javascript">';
		   //  echo'alert("Database Updated Successfully...");';
		   //  echo 'window.location= "Home_operator.php"';
		   //  echo '</script>';
	    // }else{

	    // }
        ?>
        
    </div>
    <li> <a href="Home_operator.php"> >>Home>></a></li>
	<li> <a href="index.php"> >>Logout>></a></li>
</div>
</body>
</html>
