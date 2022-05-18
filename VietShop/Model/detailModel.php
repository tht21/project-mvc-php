<?php
include './Connection.php';
class DetailModel{
    public function create($productId,$orderId,$quantityCart, $total)
    {
        global $conn;
        $sql = "INSERT INTO order_detail (order_id,product_id,  quantityCart,total) VALUES ($orderId, $productId, $quantityCart, $total)";
    //   print_r( $sql);die;
        $conn->query($sql);
    }
}