<?php
include_once './Model/productModel.php';
//include_once './Model/categoryModel.php';
class CartController
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
       
        include_once('./View/site/cart.php');
    }
}
