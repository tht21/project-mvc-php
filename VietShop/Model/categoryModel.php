<?php
include './Connection.php';
class CategoryModel
{

    public function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM category";
        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
        return $rows;
    }
    public function search_name($key)
    {
        global $conn;
        $sql = "SELECT * FROM `category` WHERE name like'%$key%'";

        $stmt = $conn->query($sql);
        //Thiet lap csdl tra ve
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetchALL se tra ve du lieu nhieu hon 1 ket qua
        $rows = $stmt->fetchAll();
        //Tra du lieu ve controller
        return $rows;
    }
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `category` WHERE  `id` = $id "   ;
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        //fetch se tra ve du lieu 1 ket qua
        $row = $stmt->fetch();
        return $row;
    }
    public function create($name)
    {
        global $conn;
        $sql = "INSERT INTO category  (name) VALUES ('$name')";
        $conn->query($sql);
    }
    public function update($id, $name)
    {
        global $conn;
        $sql = "UPDATE category SET name = '$name'WHERE id = '$id'";
        $conn->query($sql);
    }
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM category WHERE id = '$id'";
        $conn->query($sql);
    }
}
