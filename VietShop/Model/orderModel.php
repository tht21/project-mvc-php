<?php
include 'Connection.php';
class OrderModel
{
public  function getAll(){
    global $conn;
        $sql = "SELECT order_detail.*,product.title,product.image,product.quantity,user.fullname,user.phone_number,product.price FROM `order_detail` join orders on order_detail.order_id=orders.id join user on user.id=orders.user_id JOIN product on product.id=order_detail.product_id;";
    
     //   print_r($sql);die();
        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller   
        return $rows;

}

public function create($user,$note)
{
    global $conn;
    $sql = "INSERT INTO orders(user_id,note)  VALUES ('$user','$note')";
//  print_r($sql);die();
    $conn->query($sql);
    return $conn->lastInsertId();
}
public  function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM orders WHERE id = '$id'";
        $conn->query($sql);
    }
}   