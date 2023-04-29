<?php
require_once("../../App/models/Order_model.php");

    $order=new Order();
   
    $allOrders= $order->selectALLOrders();
  
if(isset($_POST['submit'])){
    var_dump($_POST);
    $id=$_POST['id'];
    $status=$_POST['status'];
    $order->updateOrder($id,$status);
    header("location:../../resource/Admin/manualOrder.php");
}


?>