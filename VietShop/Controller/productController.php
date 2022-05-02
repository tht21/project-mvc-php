<?php
include_once './Model/productModel.php';
include_once './Model/categoryModel.php';
class ProductController
{
    public function index()
    {
        $limit = 4; 
        $pageNum = 1;
      if(isset($_GET['page'])==true ) $pageNum= $_GET['page'] ;
   
        $startRow = ($pageNum - 1) * $limit;
 
        $products  = ProductModel::getAll($startRow, $limit);
        //    $products1 = ProductModel::getAllf();
        // echo "<pre>";
        // print_r($products);
        // die();

        include_once('./View/admin/product/index.php');
    }

    public  function add()
    {
        //isset($_POST['submit'])
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            ProductModel::create($_REQUEST);
            // echo "<pre>";
            // print_r($_REQUEST);
            // die();
            header('Location: index.php?controller=product&action=index');
        }
        $categorys = CategoryModel::getAll();
        include_once './View/admin/product/add.php';
    }
    public   function edit()
    {

        //lay id tu csdl len
        $id =  $_REQUEST['id'];
        $product  = ProductModel::find($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            ProductModel::update($id, $_POST['title'],  $_POST['description'], $_POST['image'],  $_POST['quantity'],  $_POST['price']);
            //    echo "<pre>";
            // print_r($products);
            // die();
            // chay toi ciew
            header('location:index.php?controller=product&action=index&id=' . $id);
        }

        include_once './View/admin/product/edit.php';
    }
    public  function delete()
    {
        $id = $_REQUEST['id'];
        ProductModel::delete($id);
        header('location:index.php?controller=product&action=index');
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $key = $_REQUEST['search'];
            $productSearch = ProductModel::search_name($key);
        }
        include_once './View/admin/product/search.php';
    }
}
