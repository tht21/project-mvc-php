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
            // print_r($check);
            // die();
            if ($check==0) {              
                header('Location:./View/site/index.php');
              
            } else {
                echo "<script>alert('Sai mật khẩu hoặc tên đăng nhập')</script>";
            }
        }
        include './View/site/user/login.php';
    }

}