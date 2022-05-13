<?php
include_once './Model/productModel.php';
include_once './Model/categoryModel.php';
class DetailController
{
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        $id =  $_REQUEST['id'];
        $details  = $this->productModel->find($id);  
        $categorys  =  $this->categoryModel->getAll();
        include_once('./View/site/productDetails.php');
    }
}