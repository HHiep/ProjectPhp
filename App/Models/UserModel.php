<?php
// namespace App\Models;

include "DBConnect.php";
// use  App\Models\DBConnect;

class UserModel {
    protected $connect;

    public function __construct()
    {
        $this->connect = new DBConnect();
    }

    public function checkLogin($email,$pw)
    {
        
        $sql = "SELECT email ,password FROM accounts where email='$email'and password='$pw'";
        $result = mysqli_query($this->connect->conect(), $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function checkMail($email)
    {
        $sql = "SELECT email ,password FROM accounts where email='$email'";
        $result = mysqli_query($this->connect->conect(), $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function checkMailEs($mail)
    {
        $sql = "SELECT mail FROM employees where mail='$mail'";
        $result = mysqli_query($this->connect->conect(), $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function insertData($email,$pw)
    {
        $sql = "INSERT INTO accounts (email,password) VALUES ('$email','$pw')";
        $result = mysqli_query($this->connect->conect(), $sql);
        
    }

    public function getData()
    {
        $sql = "SELECT employees.name,employees.address,employees.phone, employees.mail,employees.designation,employees.salary,
        departments.name as departments_name,departments.manager,departments.id,employees.id as employees_id,department_id
        FROM employees 
        JOIN departments ON employees.department_id = departments.id";
        $result = mysqli_query($this->connect->conect(), $sql);
        return  $result ;
    }

    public function getDataEs()
    {
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($this->connect->conect(), $sql);
        return  $result ;
    }

    public function insertDataDB($name,$address,$phone,$mail,$designation,$salary,$role)
    {
        $sql="INSERT INTO employees (name,address,phone,mail,designation,salary,department_id) 
        VALUES ('$name','$address','$phone','$mail','$designation','$salary','$role')";
        $result = mysqli_query($this->connect->conect(),$sql);
        
    }

    public function updateDataDB($name,$address,$phone,$mail,$designation,$salary,$role,$id){
       
        $sql ="UPDATE employees SET name='$name',address='$address' ,phone='$phone',mail='$mail',designation='$designation' ,salary='$salary' ,department_id='$role'
        WHERE id = $id";
        $result = mysqli_query($this->connect->conect(),$sql);
       
    }

    public function data($id)
    {
        $sql = "SELECT * FROM employees WHERE id = $id";
        $result = mysqli_query($this->connect->conect(), $sql);
        return  $result ;
    }
    
    public function dataDs($id){
        $sql="SELECT * FROM departments WHERE id = $id";
        $result= mysqli_query($this->connect->conect(),$sql);
        return $result;
    }

    public function getDataDs(){
        $sql="SELECT * FROM departments ";
        $result= mysqli_query($this->connect->conect(),$sql);
        return $result;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM employees WHERE id = $id";
        $result = mysqli_query($this->connect->conect(), $sql);
    }

    public function insertDataDs($name,$manager)
    {
        $sql="INSERT INTO departments (name,manager) 
        VALUES ('$name','$manager')";
        $result = mysqli_query($this->connect->conect(),$sql);   
    }
    public function updateDataDbDs($name,$manager,$id){
        $sql ="UPDATE departments SET name='$name',manager='$manager'
        WHERE id = $id";
        $result = mysqli_query($this->connect->conect(),$sql);  
    }
    public function deleteDs($id)
    {
        $sql = "DELETE FROM departments WHERE id = $id";
        $result = mysqli_query($this->connect->conect(), $sql);
    }

}