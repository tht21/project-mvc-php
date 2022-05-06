<?php
$controller = $_REQUEST['controller']; //Order
$action     = $_REQUEST['action']; //index
switch ($controller) {
    case "user":
        include './Controller/userController.php';
        $objController = new UserController();
        break;

    default:
        # code...
        break;
}
switch ($action) {
    case 'login':
        $objController->login();
        break;
    default:
        include_once './view/user/index.php';
        break;
}
