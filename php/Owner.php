<?php include 'Staff.php';

class Owner extends Staff
{

    public function __construct($id){

        $this->setId($id);
        $conn= new mysqli('localhost','root','Whishana@2366','ravi');
        $stmt=$conn->query("SELECT * FROM owner WHERE UserName='{$id}'");
        $row=$stmt->fetch_assoc();

        $this->setName($row['Name']);
        // $this->setId($row['ID']);
        $this->setUsername($row['UserName']);
        $this->setAddress($row['Address']);
        $this->setContactNo($row['ContactNo']);
        // $this->setEmail($row['Email']);
        // $this->setDateOfBirth($row['DateOfBirth']);
        // $this->setGender($row['Gender']);
        // $this->setNic($row['NIC']);
        $this->setPassword($row['Password']);

    }
    public function viewProfile(){

        $_SESSION['Name']=$this->getName();
        $_SESSION['UserName']=$this->getUsername();
        $_SESSION['Address'] = $this->getAddress();
        $_SESSION['ContactNo']=$this->getContactNo();
        // $_SESSION['Email']=$this->getEmail();
        // $_SESSION['DateOfBirth']=$this->getDateOfBirth();
        // $_SESSION['Gender']=$this->getGender();
        // $_SESSION['NIC']=$this->getNic();
        $_SESSION['Password']=$this->getPassword();

        header("location: viewProfileOwner.php");

    }
}