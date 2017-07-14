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
        $conn= new mysqli('localhost','dataOperator','','courses')
        OR die('could not connect to MYSQL'. mysqli_connect_error());
        $query="SELECT * FROM  courses_updatecourses";
        $response=@mysqli_query($conn,$query);
        if($response){
            echo '<table align="left" cellspacing="5" cellpadding="8">
            <tr><td align="left"><b>Course name</b></td>
            <td align="left"><b>Starting Date</b></td>
            <td align="left"><b>Ending Date</b></td></tr>';
            echo '</table>';
        return $response;
                
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
