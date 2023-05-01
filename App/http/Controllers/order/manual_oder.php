<?php
require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");

require_once("../../App/models/Order_model.php");


    $order=new Order();
    
    $allOrders= $order->selectALLOrders();
   


?>