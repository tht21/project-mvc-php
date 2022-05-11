<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'vshop';
global $conn;
$conn = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
// if (!$conn) {
//     die("Kết nối thất bại: " . $conn->connect_error);
// } 
 
// // Thông báo kết nối thành công
// echo "Kết nối thành công";
