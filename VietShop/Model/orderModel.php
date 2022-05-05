<?php
include './Config/ConnectDB.php';
class OrderModel
{
public static function getAll(){
    global $conn;
        $sql = "SELECT * FROM order_details ";
        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
        return $rows;
}
}