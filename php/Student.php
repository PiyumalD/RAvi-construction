<?php
 class Student{
    protected $name;
    protected $age;
    protected $address;
    protected $id;
    protected $contact;
    protected $birth;


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
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
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
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }
    public function _construct($id){
        $this->id=$id;
        $conn= new mysqli('localhost','root','','ravi construction');
        $stmt=$conn->query("select * from  students where id='{$id}'");
        $row=$stmt->fetch_assoc();
        $this->setContact($row['contact']);
        //set all variable like this......
    }
    public function viewDtails($student){

    }
     public function editDtails($student){

     }
     public function viewMarks($student){

     }
     public function viewCourse ($student){

     }


}
?>