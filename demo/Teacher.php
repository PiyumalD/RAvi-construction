<?php
include 'Staff.php';
include 'MotorGrader.php';

class Teacher extends Staff
{
    private $course;
    private $joinedDate;


    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }

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
        $stmt=$conn->query("select * from  teacher where UserName='{$id}'");
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
        $this->setCourse($row['Course']);
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
        $_SESSION['Course']=$this->getCourse();
        $_SESSION['JoinedDate']=$this->getJoinedDate();

        header("location: viewProfileTeacher.php");

    }

    public static function viewStudentReport($x){
        //$_SESSION['Index1']=$x[0];
//        $_SESSION['Name1']=$x['Name'];
//        $_SESSION['NIC1']=$x['NIC'];
//        $_SESSION['Address1']=$x['Address'];
//        $_SESSION['ContactNo1']=$x['ContactNo'];
//        $_SESSION['Course1']=$x['Course'];

        header("location: StudentReport.php");
        return $x;
    }

    public function viewCourseDetails(){

        $course=new MotorGrader('MotorGrader');
        $x=$course-> getArray();

        $_SESSION['CourseName']=$x['Name'];
        $_SESSION['NoOfStudents']=$x['NoStudents'];
        $_SESSION['TeacherName']=$x['Teacher'];
        $_SESSION['BatchNo']=$x['Batch'];
        $_SESSION['StartDate']=$x['StartDate'];
        $_SESSION['DueDate']=$x['DueDate'];

        header("location: viewCourseDetailsTeacher.php");
        //return $row;
    }

}