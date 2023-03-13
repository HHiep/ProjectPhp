<?php
// namespace App\Controller;
include "App/Models/UserModel.php";
// use App\Models\UserModel;


class AuthenController{
    protected $userModel;
       
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    
    public function getLogin(){
        $email=$_POST['email'];
        include "App/View/auth/login.php";
    }

    public function postLogin(){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(!empty($email & $password)){
            $pw=md5($password);
            if($this->userModel->checkLogin($email, $pw)==1){
                $_SESSION['email'] = $email;
                header('Location: index.php?page=user_listDepartments');
                exit;
            }else{
                $acount = "Tai khoan hoac mat khau khong dung";
                include "App/View/auth/login.php";
            }
        }else{
            if (empty($email )) {
                $emailErr = "Mail is required";
        }
            if (empty($password )) {
                $passwordErr = "Password is required";
        }
       
       }
        include "App/View/auth/login.php";
   }

    public function getRegister(){
        $email=$_POST['email'];
        include "App/View/auth/register.php";
    }

    public function postRegister(){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if (!empty($email & $password )) {
            $pw=md5($password);
            $check=$this->userModel->checkMail($email);
            if($check==0){
                $this->userModel->insertData($email,$pw);
                header('Location: index.php?page=user_login');
            }else{
                
                $messenger="Mail da ton tai";
                include "App/View/auth/register.php";
            }
            include "App/View/auth/register.php";
        }else{
            if (empty($email )) {
                $emailErr = "Mail is required";
            }
            if (empty($password )) {
                $passwordErr = "Password is required";
            }
            include "App/View/auth/register.php";
            exit;
        }
    }

    public function getList(){
        if(!empty($_SESSION['email'])){
            $data=$this->userModel->getData();
            include "App/View/employees/list.php";
        }else{
            include "App/View/auth/login.php";
        }
        
    }
    
    public function addData(){
        if(!empty($_SESSION['email'])){
            $data=$this->userModel->getDataDs();
            include "App/View/employees/add.php";
        }else{
            include "App/View/auth/login.php";
        }
    }

    public function postAddData(){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $designation=$_POST['designation'];
        $salary=$_POST['salary'];
        $role=$_POST['role'];
        if(!empty($name & $address & $phone & $mail & $designation & $salary)){
            $count=$this->userModel->checkMailEs($mail);
            if($count==1){
                $mailErr = "Mail already available";
               
                $data=$this->userModel->getDataDs();
               
                include "App/View/employees/add.php";
                exit;
            }
            $this->userModel->insertDataDB($name,$address,$phone,$mail,$designation,$salary,$role);
            header('Location: index.php?page=user_list');
        }else{
            if(empty($name)){
                $nameErr= "Name is required";
            }
            if(empty($address)){
                $addressErr = "Address is required";
            }
            if(empty($phone)){
                $phoneErr = "Phone is required";
            }
            if(empty($mail)){
                $mailErr = "Mail is required";
            }
            if(empty($designation)){
                $designationErr = "Designation is required";
            }
            if(empty($salary)){
                $salaryErr = "Salary is required";
            }
            $data=$this->userModel->getDataDs();
            include "App/View/employees/add.php";
            exit; 
        }
    }

    public function updateData(){
        if(!empty($_SESSION['email'])){
            $id=$_GET['id'];
            $data=$this->userModel->data($id);
            $row = mysqli_fetch_array($data);
            $dataDs=$this->userModel->getDataDs();
            include "App/View/employees/update.php";
        }else{
            include "App/View/auth/login.php";
        }
        
    }

    public function postUpdateData(){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $designation=$_POST['designation'];
        $salary=$_POST['salary'];
        $role=$_POST['role'];   
        $this->userModel->updateDataDB($name,$address,$phone,$mail,$designation,$salary,$role,$id);
        header('Location: index.php?page=user_list');
    }

    public function deleteData(){
        if(!empty($_SESSION['email'])){
            $id=$_GET['id'];
            $this->userModel->delete($id);
            header('Location: index.php?page=user_list');
        }else{
            include "App/View/auth/login.php";
        }
       
    }
    public function getListDepartments(){
        if(!empty($_SESSION['email'])){
            $data=$this->userModel->getDataDs();
            include "App/View/departments/listdepartments.php";
        }else{
            include "App/View/auth/login.php";
        }
        
    }

    public function addDataDs(){
        if(!empty($_SESSION['email'])){
            include "App/View/departments/add.php";
        }else{
            include "App/View/auth/login.php";
        }
    }

    public function postAddDataDs(){
        $name=$_POST['departments_name'];
        $manager=$_POST['manager'];
        if(!empty($name & $manager )){
            $this->userModel->insertDataDs($name,$manager);
            header('Location: index.php?page=user_listDepartments');
        }else{
            if (empty($name )) {
                $namelErr = "Mail is required"; 
            }
            if (empty($manager )) { 
                $managerErr = "Mail is required";   
            }
            include "App/View/departments/add.php";
            exit;
        } 
    }

    public function updateDataDs(){
        if(!empty($_SESSION['email'])){
            $id=$_GET['id'];
            $data=$this->userModel->dataDs($id);
            $row = mysqli_fetch_array($data);
            include "App/View/departments/update.php";
        }else{
            include "App/View/auth/login.php";
        }
    }

    public function postUpdateDataDs(){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $manager=$_POST['manager'];
        $this->userModel->updateDataDbDs($name,$manager,$id);
        header('Location: index.php?page=user_listDepartments');
    }

    public function deleteDataDs(){
        if(!empty($_SESSION['email'])){
            $id=$_GET['id'];
            $this->userModel->deleteDs($id);
            header('Location: index.php?page=user_listDepartments');
        }else{
            include "App/View/auth/login.php";
        }
    }

    public function logout(){
        unset($_SESSION['email']);
        header('Location: index.php?page=user_login');
    }
}


?>