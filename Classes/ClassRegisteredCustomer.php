<?php
require_once 'ClassCustomer.php';
require_once "ClassOrder.php";
class RegisteredCustomer extends Customer{

private $history = [];

public function  makeOrder(Order $order){
    $this->history[] = $order;
}

public function getHistory(){
    return $this->history;
}







}




?>