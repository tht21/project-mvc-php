<?php
include './Config/ConnectDB.php';
class ProductModel
{
    public static function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM product ";
        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
        return $rows;
    }

    public static function search_name($key)
    {
        global $conn;
        $sql = "SELECT * FROM `product` WHERE title like'%$key%';";

        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
        return $rows;
    }
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `product` WHERE `id` = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetch se tra ve du lieu 1 ket qua
        $row = $stmt->fetch();
        return $row;
    }
    public static function create($data)
    {
        global $conn;
        $title = $data['title'];
        $description = $data['description'];
        $image = $data['image'];
        $quantity = $data['quantity'];
        $price = $data['price'];
        $category = $data['category_id'];
        $sql = "INSERT INTO product  (category_id,title,description,image,quantity,price) VALUES ('$category','$title', '$description', '$image', '$quantity',' $price')";
        $conn->query($sql);
    }
    public static function update($id, $title, $description, $image, $quantity, $price)
    {
        global $conn;
        $sql = "UPDATE product SET title = '$title',description = '$description',image = '$image',quantity = '$quantity',price = '$price' WHERE id = '$id'";
        $conn->query($sql);
    }
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM product WHERE id = '$id'";
        $conn->query($sql);
    }
}
