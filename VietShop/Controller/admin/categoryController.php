<?php
include_once './Model/categoryModel.php';
class CategoryController{
    
    public function __construct(){
        $this->categoryModel =new CategoryModel();
       }
    public  function index() {
        $category = $this->categoryModel->getAll();
        include_once('./View/admin/category/index.php');
    }
    public  function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $this->categoryModel->create($name);
            // echo "<pre>";
            // print_r($_REQUEST);
            // die();
            header('Location: index.php?controller=category&action=index');
        }
        include_once './View/admin/category/add.php';
    }
    public  function edit(){
        $id =  $_REQUEST['id'];
        $category  =$this->categoryModel->find($id);
      
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $this->categoryModel->update($id, $_POST['name']);
            header('location:index.php?controller=category&action=index&id=' . $id);
        }
        include_once './View/admin/category/edit.php';
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $key = $_REQUEST['search'];
            $categorySearch = $this->categoryModel->search_name($key);
        }
        include_once './View/admin/category/search.php';
    }
    public  function delete(){
        $id = $_REQUEST['id'];
        $this->categoryModel->delete($id);
        header('location:index.php?controller=category&action=index');
    }

}