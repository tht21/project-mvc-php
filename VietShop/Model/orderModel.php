<?php
include 'Connection.php';
class OrderModel
{
public static function getAll(){
    global $conn;
        $sql = "SELECT orders.*,product.title,product.quantity,user.fullname,user.phone_number FROM `orders` join user on user.id=orders.user_id 
        JOIN product on product.id=orders.product_id;";
      
     //   print_r($sql);die();
        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
      
        return $rows;

}
public function create($orders)
{
    global $conn;
    $sql = "INSERT INTO orders  VALUES ('$orders')";
    print_r($sql);die();
    $conn->query($sql);
}
}