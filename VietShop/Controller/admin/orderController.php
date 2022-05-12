<?php
include_once './Model/orderModel.php';
class OrderController{
   public function __construct(){
      $this->order = new OrderModel();
   }
 public function index(){
   $order=$this->order -> getAll();
    include_once('./View/admin/order/index.php');
 }
 
 public function search(){}

}   