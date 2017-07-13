<?php
 class Student{

     private $name;
     private $id;
     private $username;
     private $address;
     private $contactNo;
     private $email;
     private $dateOfBirth;
     private $gender;
     private $nic;
     private $password;
     private $course;
     private $joinedDate;

     /**
      * @return mixed
      */
     public function getName()
     {
         return $this->name;
     }

     /**
      * @param mixed $name
      */
     public function setName($name)
     {
         $this->name = $name;
     }

     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * @return mixed
      */
     public function getUsername()
     {
         return $this->username;
     }

     /**
      * @param mixed $username
      */
     public function setUsername($username)
     {
         $this->username = $username;
     }

     /**
      * @return mixed
      */
     public function getAddress()
     {
         return $this->address;
     }

     /**
      * @param mixed $address
      */
     public function setAddress($address)
     {
         $this->address = $address;
     }

     /**
      * @return mixed
      */
     public function getContactNo()
     {
         return $this->contactNo;
     }

     /**
      * @param mixed $contactNo
      */
     public function setContactNo($contactNo)
     {
         $this->contactNo = $contactNo;
     }

     /**
      * @return mixed
      */
     public function getEmail()
     {
         return $this->email;
     }

     /**
      * @param mixed $email
      */
     public function setEmail($email)
     {
         $this->email = $email;
     }

     /**
      * @return mixed
      */
     public function getDateOfBirth()
     {
         return $this->dateOfBirth;
     }

     /**
      * @param mixed $dateOfBirth
      */
     public function setDateOfBirth($dateOfBirth)
     {
         $this->dateOfBirth = $dateOfBirth;
     }

     /**
      * @return mixed
      */
     public function getGender()
     {
         return $this->gender;
     }

     /**
      * @param mixed $gender
      */
     public function setGender($gender)
     {
         $this->gender = $gender;
     }

     /**
      * @return mixed
      */
     public function getNic()
     {
         return $this->nic;
     }

     /**
      * @param mixed $nic
      */
     public function setNic($nic)
     {
         $this->nic = $nic;
     }

     /**
      * @return mixed
      */
     public function getPassword()
     {
         return $this->password;
     }

     /**
      * @param mixed $password
      */
     public function setPassword($password)
     {
         $this->password = $password;
     }
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

        $this->id=$id;
        $conn= new mysqli('localhost','root','','ravi');
        $stmt=$conn->query("select * from  student where UserName='{$id}'");
        $row=$stmt->fetch_assoc();
         $this->setName($row['Name']);
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

        header("location: viewProfileStudent.php");

    }
     public function editProfile($student){

     }
     public function viewMarks($student){

     }
     public function viewCourse ($student){

     }


}
?>