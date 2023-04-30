<?php
require_once("../../App/models/Order_model.php");

    $order=new Order();
    
    $allOrders= $order->selectALLOrders();
   


?>