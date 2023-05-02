<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");

// require_once("../../../App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");

$order = new Order();
$json = file_get_contents('php://input');
header('Content-Type: application/json');
  $data = json_decode($json);
  var_dump($data);

// var_dump($_POST['jsondata']);

if(isset($_POST['jsondata'])){
    $user_id = $_POST['user'];
    $room_id = $data['room'];
    $amount = $data['total'];
    $note = $data['note'];
    $order_id = $order->insertOrder($note,$amount,$user_id);
}
?>