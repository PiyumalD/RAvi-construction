<?php

class Course
{

    private $courseName;
    private $teacherName;
    private $noOfStudents;
    private $batch;
    private $startDate;
    private $dueDate;

    /**
     * @return mixed
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * @param mixed $courseName
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }
    /**
     * @return mixed
     */
    public function getTeacherName()
    {
        return $this->teacherName;
    }

    /**
     * @param mixed $teacherName
     */
    public function setTeacherName($teacherName)
    {
        $this->teacherName = $teacherName;
    }
    /**
     * @return mixed
     */
    public function getNoOfStudents()
    {
        return $this->noOfStudents;
    }

    /**
     * @param mixed $noOfStudents
     */
    public function setNoOfStudents($noOfStudents)
    {
        $this->noOfStudents = $noOfStudents;
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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    public function __construct($courseName){

        $this->setCourseName($courseName);
        $conn= new mysqli('localhost','root','','ravi');
        $stmt=$conn->query("select * from course where Course='{$courseName}'");
        $row=$stmt->fetch_assoc();

        $this->setTeacherName($row['TeacherName']);
        $this->setNoOfStudents($row['NoOfStudents']);
        $this->setBatch($row['Batch']);
        $this->setStartDate($row['StartDate']);
        $this->setDueDate($row['DueDate']);
    }
}