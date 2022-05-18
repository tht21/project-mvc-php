
<?php

include_once './Controller/request/formRequest.php';
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
        include_once('./View/admin/product/index.php');
    }

    public  function add()
    {
        $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
        unset($_SESSION['errors']);
        $requests= isset($_SESSION['requests']) ? $_SESSION['requests'] : [];
        unset($_SESSION['requests']);

       // print_r($requests);die();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // print_r($_REQUEST);die();
        //    $_SESSION['requests'] = $_REQUEST;
        
            
            $request = new Request($_REQUEST);
            $request->validateForm(
                [
                    'title',
                    'category_id',
                    'description',
                    'image',
                    'quantity',
                    'price'
                ],
                [
                    'title' => 'Vui lòng nhập tên sản phẩm ',
                    'category_id' => 'Vui lòng chọn loại sản phẩm',
                    'description' => 'Vui lòng nhập mô tả  sản phẩm',
                    'image' => 'Vui lòng chọn hình ảnh',
                    'quantity' => 'Vui lòng nhập số lượng',
                    'price' => 'Vui lòng nhập giá tiền'
                ]
            );
            if ($request->isvalid()) {
                $this->productModel->create($_REQUEST);
                $_SESSION['flash_message'] = "Thêm mới thành công";
                // echo "<pre>";
                // print_r($_REQUEST);
                // die();
                header('Location: index.php?controller=product&action=index');
            
        } else {

            header('location:index.php?controller=product&action=add');
        }}
        $categorys =  $this->categoryModel->getAll();
        include_once './View/admin/product/add.php';
    }
    public   function edit()
    {
        $id =  $_REQUEST['id'];
        $product  = $this->productModel->find($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // print_r($_POST['category_id']);die();
            $this->productModel->update($id, $_POST['title'], $_POST['category_id'], $_POST['description'], $_POST['image'],  $_POST['quantity'],  $_POST['price']);
            $_SESSION['flash_message'] = "Chỉnh sửa  thành công";
            // echo "<pre>";
            header('location:index.php?controller=product&action=index&id=' . $id);
        }
        $categorys =  $this->categoryModel->getAll();
        include_once './View/admin/product/edit.php';
    }

    public  function delete()
    {
        $id = $_REQUEST['id '];
        
        $this->productModel->delete($id);
        header('location:index.php?controller=product&action=index');
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $key = $_REQUEST['search'];
            $productSearch =  $this->productModel->search($key);
        }
        include_once './View/admin/product/search.php';
    }
}
