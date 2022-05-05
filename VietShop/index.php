<?php
$controller = $_REQUEST['controller']; //Order
$action     = $_REQUEST['action']; //index
switch ($controller) {
    case "product":
        include './Controller/productController.php';
        $objController = new ProductController();
        break;
    case 'category':
        include_once './Controller/categoryController.php';
        $objController = new CategoryController();
        break;
    case 'order':
        include_once './Controller/orderController.php';
        $objController = new OrderController();
        break;
        // case 'User':
        //     include_once './controllers/UserController.php';
        //     $objController = new UserController();
        //     break;
    default:
        # code...
        break;
}

switch ($action) {
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
        $objController->index();
        break;
}

//**http://localhost:3000/xampp/htdocs/project-mvc-php/VietShop/index.php?controller=product&action=index**/