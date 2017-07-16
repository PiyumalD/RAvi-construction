<?php
include 'Staff.php';

class DataOperator extends Staff
{
    private $joinedDate;

    /**
     * @return mixed
     */
    public function getJoinedDate()
    {
        return $this->joinedDate;
    }

    /**
     * @param mixed $joinedDate
     */
    public function setJoinedDate($joinedDate)
    {
        $this->joinedDate = $joinedDate;
    }

    public function __construct($id){

        $this->setId($id);
        $conn= new mysqli('localhost','root','','ravi');
        $stmt=$conn->query("select * from  dataoperator where UserName='{$id}'");
        $row=$stmt->fetch_assoc();

        $this->setName($row['Name']);
        // $this->setId($row['ID']);
        $this->setUsername($row['UserName']);
        $this->setAddress($row['Address']);
        $this->setContactNo($row['ContactNo']);
        $this->setEmail($row['Email']);
        $this->setDateOfBirth($row['DateOfBirth']);
        $this->setGender($row['Gender']);
        $this->setNic($row['NIC']);
        $this->setPassword($row['Password1']);
        $this->setJoinedDate($row['JoinedDate']);

    }
    public function viewProfile(){

        $_SESSION['Name']=$this->getName();
        $_SESSION['UserName']=$this->getUsername();
        $_SESSION['Address'] = $this->getAddress();
        $_SESSION['ContactNo']=$this->getContactNo();
        $_SESSION['Email']=$this->getEmail();
        $_SESSION['DateOfBirth']=$this->getDateOfBirth();
        $_SESSION['Gender']=$this->getGender();
        $_SESSION['NIC']=$this->getNic();
        $_SESSION['Password1']=$this->getPassword();
        $_SESSION['JoinedDate']=$this->getJoinedDate();

        header("location: viewProfileOperator.php");

    }
    public function viewCourseDetails(){
        $conn2 = mysqli_connect('localhost','root','Whishana@2366','ravi');
        $query = "SELECT * FROM courses";
        if (!$conn2) {
            die('can not connect to the database'.mysql_error());
        }
        $result = mysqli_query($conn2,$query);
        if (!$result) {
            die("database query failed...");
        }

        // header("location: empty.php");
        // header("location: emptyPage.php");
        

        // $output = call_page('emptyPage.php');
        // echo $output;
        while ($row = mysqli_fetch_assoc($result)) {
            // return $row;
            // return $row;
            $_SESSION['CourseName']=$row['CourseName'];
            $_SESSION['Starting_Date']=$row['Starting_Date'];
            $_SESSION['Ending_Date']=$row['Ending_Date'];
            $_SESSION['NoOfStudents']=$row['NoOfStudents'];
            $_SESSION['Batch']=$row['Batch'];
            $_SESSION['TeacherName']=$row['TeacherName'];
            // echo '
            //     <tr>
            //         <td>'.$row['CourseName'].'</td>
            //         <td>'.$row['Starting_Date'].'</td>
            //         <td>'.$row['Ending_Date'].'</td>
            //         <td>'.$row['NoOfStudents'].'</td>
            //         <td>'.$row['Batch'].'</td>
            //         <td>'.$row['TeacherName'].'</td>
            //     </tr>';
        }       
    }
    public function updateCourseDetails($course){

    }
    public function getAttendance(){
        
    }
    public function inputStudentsMarks(){

    }
    
    public function createNewAccount(){

    }
}
