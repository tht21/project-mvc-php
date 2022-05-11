<?php
include_once './Model/productModel.php';
include_once './Model/categoryModel.php';
class ProductController
{
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
    }
    public function index()
    {
        $products  =  $this->productModel->getAll();
        $categorys  =  $this->categoryModel->getAll();
        include_once('./View/site/index.php');
    }
}
