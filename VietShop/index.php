<?php
$controller = $_REQUEST['controller']; 
$action     = $_REQUEST['action']; 
switch ($controller) {
    case "user":
        include './Controller/userController.php';
        $objController = new UserController();
        break;  
    case "product":
        include './Controller/productController.php';
        $objController = new ProductController();
        break;
    // case 'category':
    //     include_once './Controller/categoryController.php';
    //     $objController = new CategoryController();
    //     break;
    // case 'order':
    //     include_once './Controller/orderController.php';
    //     $objController = new OrderController();
    //     break;
        // case 'User':
        //     include_once './controllers/UserController.php';
        //     $objController = new UserController();
        //     break;
    default:
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