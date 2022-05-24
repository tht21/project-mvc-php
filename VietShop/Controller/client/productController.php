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
      
        $product  =  $this->productModel->getAll();
        $total_records = count($product);
        $start = 0;
        $limit = 6;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $total_page = ceil($total_records / $limit);
    
        $start = ($current_page - 1) * $limit;
        $products=$this->productModel->getPage($start, $limit);
       
        $categorys  =  $this->categoryModel->getAll();
        include_once('./View/site/index.php');
    }
    public  function add()
    {
        include_once('./View/site/contact.php');
    }
}
