<?php
include_once './Model/productModel.php';
//include_once './Model/categoryModel.php';
class OrderController
{
    public function __construct()
    {
        $this->productModel = new ProductModel();
    //    $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        $id =  $_REQUEST['id'];
        $addcarts  = $this->productModel->find($id);  
      //  $this->productModel->create($addcarts);
   // print_r($addcarts);die();
        include_once('./View/site/cart.php');
    }
}