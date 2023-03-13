<?php 
session_start();
// use App\Controller\AuthenController;
require_once "App/Controller/AuthenController.php";

$authencontroller = new AuthenController();

$page=$_GET['page'];
$method = $_SERVER["REQUEST_METHOD"];

$page = $_GET['page'];
switch ($page) {
    case "user_login":
        if($method=="GET"){
            $authencontroller->getLogin();
        }else{
            $authencontroller->postLogin();
        }  
        break;
    case "user_Register":
        if($method=="GET"){
                $authencontroller->getRegister();
         }else{
                $authencontroller->postRegister();
        }  
        break;
    case "user_list":   
        $authencontroller->getList();
        break;
    case "user_listDepartments":   
        $authencontroller->getListDepartments();
        break;
    case "user_add":
        if($method=="GET"){
            $authencontroller->addData();
        }else{
            $authencontroller->postAddData();
        }  
        break;
    case "user_addDs":
        if($method=="GET"){
            $authencontroller->addDataDs();
        }else{
            $authencontroller->postAddDataDs();
        }  
        break;
    case "user_update":
        if($method=="GET"){
            $authencontroller->updateData();
        }else{
            $authencontroller->postUpdateData();
        }  
        break;
    case "user_updateDs":
        if($method=="GET"){
            $authencontroller->updateDataDs();
        }else{
            $authencontroller->postUpdateDataDs();
        }  
        break;
    case "user_delete":   
            $authencontroller->deleteData();
            break;
    case "user_deleteDs":   
            $authencontroller->deleteDataDs();
            break;
    case "logout":   
            $authencontroller->logout();
            break;
      default: $authencontroller->getLogin();
       
}