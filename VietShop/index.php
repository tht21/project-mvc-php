<?php
session_start();
$controller = $_REQUEST['controller'];
$action     = $_REQUEST['action'];
switch ($controller) {
    case "user":
        include './Controller/userController.php';
        $objController = new UserController();
        break;
    case "product":
        include './Controller/admin/productController.php';
        $objController = new ProductController();
        break;
    case 'category':
        include_once './Controller/admin/categoryController.php';
        $objController = new CategoryController();
        break;
    case 'order':
        include_once './Controller/admin/orderController.php';
        $objController = new OrderController();
        break;  
    case "site":
        include './Controller/client/productController.php';
        $objController = new ProductController();
        break;
    case "cart":
        include './Controller/client/orderController.php';
        $objController = new OrderController();
        break;
    default:
    case 'details':
        include_once './Controller/client/detailConttroller.php';
       $objController = new DetailController();
        break;
    case "user ":
        include './Controller/userController.php';
        $objController = new UserController();

        break;
}
// action giua model vaf controller
switch ($action) {
    case 'login':
        $objController->login();
        break;
    case 'index':
        $objController->index();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'search':
        $objController->search();
        break;
    default:
        include './View/login.php';
        break;
}

//**http://localhost:3000/xampp/htdocs/project-mvc-php/VietShop/index.php?controller=product&action=index**/