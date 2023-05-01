<?php
require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");

// require_once("../../../App/models/Order_model.php");
// include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");

$order = new Order();

var_dump($_POST);
if(isset($_POST['data'])){
  

//   $order->updateOrder($orderId, $status);
}
?>