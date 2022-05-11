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
            // echo '<pre>';      
            // print_r($check);
            //  die();  
            $_SESSION['role'] =$check->role_id;
             
            if ($_SESSION['role']==1) {
                header('location:index.php?controller=product&action=index');
            }
            if ($_SESSION['role']==2) {
                header('location:php?controller=site&action=index');
            }
        }
        include './View/login.php';
    }

}