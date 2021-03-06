<?php include 'Staff.php';

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
        $conn= new mysqli('localhost','root','','ravi construction');
        $stmt=$conn->query("select * from  teachers where ID='{$id}'");
        $row=$stmt->fetch_assoc();

        $this->setName($row['Name']);
       // $this->setId($row['ID']);
//        $this->setUsername($row['UserName']);
        $this->setAddress($row['Address']);
        $this->setContactNo($row['Contact']);
        $this->setEmail($row['Email']);
        $this->setDateOfBirth($row['DateOfBirth']);
        $this->setGender($row['Gender']);
        $this->setNic($row['NIC']);
        $this->setPassword($row['Password']);
        $this->setCourse($row['Course']);
        $this->setJoinedDate($row['JoinedDate']);
    }
    public function viewProfile(){
        $_SESSION['user']=serialize($this);
//        $_SESSION['Name']=$this->getName();
//        $_SESSION['UserName']=$this->getUsername();
//        $_SESSION['Address'] = $this->getAddress();
//        $_SESSION['ContactNo']=$this->getContactNo();
//        $_SESSION['Email']=$this->getEmail();
//        $_SESSION['DateOfBirth']=$this->getDateOfBirth();
//        $_SESSION['Gender']=$this->getGender();
//        $_SESSION['NIC']=$this->getNic();
//        $_SESSION['Password1']=$this->getPassword();
//        $_SESSION['Course']=$this->getCourse();
//        $_SESSION['JoinedDate']=$this->getJoinedDate();

        header("location: viewProfileTeacher.php");

    }
    public function editProfile(){

        $_SESSION['user']=serialize($this);

        header("location: TeacherUpdate.php");
    }
    public static function viewStudentReport($x){
        $_SESSION['Index']=$x['UserName'];
        $_SESSION['Name']=$x['Name'];
        $_SESSION['NIC']=$x['NIC'];
        $_SESSION['Address']=$x['Address'];
        $_SESSION['ContactNo']=$x['ContactNo'];
        $_SESSION['Course']=$x['Course'];

        header("location: StudentReport.php");
    }
}