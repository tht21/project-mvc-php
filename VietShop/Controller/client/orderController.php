<?php
include_once './Model/orderModel.php';
include_once './Model/productModel.php';
include_once './Model/detailModel.php';

class OrderController
{
    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->orderModel = new OrderModel();
        $this->detailModel = new DetailModel();
    }


    public function add()
    {
      
       if( isset($_SESSION['user'])) {
        $id =  $_REQUEST['id'];
        $quantity = (isset($_REQUEST['quantityCart']) ? $_REQUEST['quantityCart'] : 1);
        // echo $action;
        // echo   $id;
        // die
        $details = $this->productModel->find($id);
        //session_destroy();die;
        //xu li so luong =1
        $item = [
            'id' =>  $details->id,
            'title' =>  $details->title,
            'price' =>  $details->price,
            'image' =>  $details->image,
            'quantityCart' =>  $quantity
        ];

        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantityCart'] +=  $quantity;
        } else {
            $_SESSION['cart'][$id] = $item;
        }
        header('location: index.php?controller=cart&action=showCart');
        }else{
            header('location: index.php?controller=user&action=login');
        }
     
    }
    public  function showCart()
    {
        include_once('./View/site/cart.php');
    }
    public  function checkout()
    {
        if (isset($_POST['note'])) {
            $user =  $_SESSION['user']->id;
            $note = $_POST['note'];
            $orderId = $this->orderModel->create($user, $note);
            foreach ($_SESSION['cart'] as $key => $value) {
                $productId =   $value['id'];
                $quantityCart =  $value['quantityCart'];
                $total = ($value['quantityCart'] * $value['price']);          
                $this->detailModel->create($productId, $orderId, $quantityCart, $total); 
                $_SESSION['flash_message'] = "Đặt hàng thành công";
                header('location: index.php?controller=site&action=index');
            }
        }

        include_once('./View/site/checkout.php');
    }

    public  function delete()
    {
        $id =  $_REQUEST['id'];
        unset($_SESSION['cart'][$id]);
        include_once('./View/site/cart.php');
    }
}
