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
     private $batch;
     private $prac1;
     private $prac2;
     private $prac3;
     private $prac4;
     private $prac5;

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
     public function getBatch()
     {
         return $this->batch;
     }

     /**
      * @param mixed $batch
      */
     public function setBatch($batch)
     {
         $this->batch = $batch;
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
     /**
      * @return mixed
      */
     public function getPrac1()
     {
         return $this->prac1;
     }

     /**
      * @param mixed $prac1
      */
     public function setPrac1($prac1)
     {
         $this->prac1 = $prac1;
     }

     /**
      * @return mixed
      */
     public function getPrac2()
     {
         return $this->prac2;
     }

     /**
      * @param mixed $prac2
      */
     public function setPrac2($prac2)
     {
         $this->prac2 = $prac2;
     }

     /**
      * @return mixed
      */
     public function getPrac3()
     {
         return $this->prac3;
     }

     /**
      * @param mixed $prac3
      */
     public function setPrac3($prac3)
     {
         $this->prac3 = $prac3;
     }
     /**
      * @return mixed
      */
     public function getPrac4()
     {
         return $this->prac4;
     }

     /**
      * @param mixed $prac4
      */
     public function setPrac4($prac4)
     {
         $this->prac4 = $prac4;
     }
     /**
      * @return mixed
      */
     public function getPrac5()
     {
         return $this->prac5;
     }

     /**
      * @param mixed $prac5
      */
     public function setPrac5($prac5)
     {
         $this->prac5 = $prac5;
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
         $this->setPrac1($row['Prac1']);
         $this->setPrac2($row['Prac2']);
         $this->setPrac3($row['Prac3']);
         $this->setPrac4($row['Prac4']);
         $this->setPrac5($row['Prac5']);

    }
    public function viewProfile(){

        $_SESSION['user']=serialize($this);

        header("location: viewProfileStudent.php");

    }
     public function editProfile($student){

     }
     public function viewMarks(){

         $_SESSION['Prac1'] = $this->getPrac1();
         $_SESSION['Prac2'] = $this->getPrac2();
         $_SESSION['Prac3'] = $this->getPrac3();
         $_SESSION['Prac4'] = $this->getPrac4();
         $_SESSION['Prac5'] = $this->getPrac5();

         $total = ($this->getPrac1())+($this->getPrac2())+($this->getPrac3())+($this->getPrac4())+($this->getPrac5());
         $_SESSION['Total'] = $total;

         header("location: viewMarks.php");
     }
     public function viewCourseDetails ($course){



     }

}
?>