<?php
include './Config/ConnectDB.php';
class UserModel
{
    
    public static function checkLogin($email,$password){
        global $conn;
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
        $query = $conn->query($sql);
        $query->setFetchMode(PDO::FETCH_OBJ);
        $row = $query->fetch();
        return $row;
    }
}