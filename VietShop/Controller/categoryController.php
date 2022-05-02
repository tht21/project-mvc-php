<?php
include_once './Model/categoryModel.php';
class CategoryController{
    public  function index() {
        $category = CategoryModel::getAll();
        include_once('./View/admin/category/index.php');
    }
    public  function add(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            CategoryModel::create($name);
            // echo "<pre>";
            // print_r($_REQUEST);
            // die();
            header('Location: index.php?controller=category&action=index');
        }
        include_once './View/admin/category/add.php';
    }
    public  function edit(){
        $id =  $_REQUEST['id'];
        $category  =CategoryModel::find($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        CategoryModel::update($id, $_POST['name']);
            header('location:index.php?controller=category&action=index&id=' . $id);
        }
        include_once './View/admin/category/edit.php';
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $key = $_REQUEST['search'];
            $categorySearch = CategoryModel::search_name($key);
        }
        include_once './View/admin/category/search.php';
    }
    public  function delete(){
        $id = $_REQUEST['id'];
        CategoryModel::delete($id);
        header('location:index.php?controller=category&action=index');
    }

}