<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Type Students Index Number: </p>
	<form action="" method="post"> 
           <input type="text" name="studentIndex">
           <button type="submit" value="Submit" name="submit">Submit</button>
           <?php 
               $running=0;
               $done=1;
            ?>
           
        
    </form>
    <?php 
    $indexOfStudent= $_POST['studentIndex'];
    $submitButton= $_POST['submit'];
    if ($submitButton && !empty($indexOfStudent)) {
        $studentIndexVal=$indexOfStudent;
        $conn2 = mysqli_connect('localhost','root','Whishana@2366','ravi');
        $query = "SELECT * FROM student WHERE UserName= '$studentIndexVal' ";
        $result = mysqli_query($conn2,$query);
        if (!$result) {
            die("database query failed...");
        }
        while($data = mysqli_fetch_assoc($result)){
            $running=1;
            $_SESSION['studentName']=$data['Name'];
            $_SESSION['studentAddress']=$data['Address'];
            $_SESSION['studentNIC']=$data['NIC'];
            $_SESSION['studentCourse']=$data['Course'];
        } 
        if ($running==1) {
                echo "<form>
                <br><br>
                    <li>
                        <label for=Student Name><b>Student's name :</b></label>
                        <label id=Student Name>'".$_SESSION['studentName']."'</label>
                    </li><br>
                    <li>
                        <label for=NIC no><b>NIC no :</b></label>
                        <label id=NIC no>'".$_SESSION['studentNIC']."'</label>
                    </li><br>
                    <li>
                        <label for=Address><b>Address :</b></label>
                        <label id=Address>'".$_SESSION['studentAddress']."'</label>
                    </li><br>
                    <li>
                        <label for=Course><b>Course :</b></label>
                        <label id=Course>'".$_SESSION['studentCourse']."'</label>
                    </li><br>
                </form>";
        }
    
    }

    ?>            
</body>
</html>