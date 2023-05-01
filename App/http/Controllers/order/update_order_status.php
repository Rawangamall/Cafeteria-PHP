<?php

// require_once("../../../App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");

$order = new Order();
var_dump($_POST);

if(isset($_POST['orderId']) && isset($_POST['status'])){
  $orderId = $_POST['orderId'];
  $status = $_POST['status'];
  $order->updateOrder($orderId, $status);
}
?>