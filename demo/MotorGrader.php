<?php
//include 'Course.php';
//
//class MotorGrader extends Course
//{
//
//    public function __construct($course)
//    {
//        if($course=='MotorGrader'){
//            $this->setCourseName($course);
//            $conn= new mysqli('localhost','root','','ravi');
//            $stmt=$conn->query("select * from motorGrader where Course='{$course}'");
//            $row=$stmt->fetch_assoc();
//
//            $this->setBatchNo($row['Batch']);
//            $this->setNoOfStudents($row['NoOfStudents']);
//            $this->setStartDate($row['StartDate']);
//            $this->setDueDate($row['DueDate']);
//            $this->setTeacherName($row['TeacherName']);
//
//        }
//
//    }
//
//    public function getArray(){
//        $x['Name']=$this->getCourseName();
//        $x['Batch']=$this->getBatchNo();
//        $x['NoStudent']=$this->getNoOfStudents();
//        $x['Teacher']=$this->getTeacherName();
//        $x['StartDate']=$this->getStartDate();
//        $x['DueDate']=$this->getDueDate();
//
//        return $x;
//    }
//
//
//
//}