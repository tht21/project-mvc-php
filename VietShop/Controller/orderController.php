<?php
include_once './Model/orderModel.php';
class OrderController{
 public function index(){
    OrderModel::getAll();
    include_once('./View/admin/order/index.php');
 }
 public function add(){}
 public function edit(){}
 public function search(){}
 public function delete(){}
}   