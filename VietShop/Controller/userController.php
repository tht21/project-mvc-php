<?php 
include_once './Model/userModel.php';
class UserController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $check =  UserModel::checkLogin($email, $password); 
            
          
            $_SESSION['role'] =$check->role_id;
            // echo '<pre>';      
            // print_r($_SESSION['user']);
            //  die();  
            if ($_SESSION['role']==1) {
                $_SESSION['admin']= $check;
               if(isset($_SESSION['admin']))
                header('location:index.php?controller=product&action=index');
                unset($_SESSION['user']);
            }
            else if ($_SESSION['role']==2) {
                $_SESSION['user']= $check;
                header('location:php?controller=site&action=index');
            }
        }
        include './View/login.php';
    }
    public  function checkout(){
         unset($_SESSION['user']);
        header('location:php?controller=site&action=index');
    } 

}