<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");

// require_once("../../../App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_Product_model.php");


// var_dump($_SERVER["REQUEST_METHOD"] );

if (isset($_POST["jsondata"])) {
  // var_dump("ccccccc");
  $order = new Order();
  $order_product = new Order_Product();
  
  $jsondata = urldecode($_POST["jsondata"]);
  $data = json_decode($jsondata, true);
  // Access the data as an associative array
  $user_id = $data["user"];
  $room = $data["room"];
  // $total = $data["total"];
  $note = $data["note"];
  $products = $data["products"];
  // $user_id = $_POST['user'];
   
    $amount = $data['total'];
  $order_id = $order->insertOrder($note,$amount,$user_id);
  var_dump($products);
  foreach ($products as $key => $value) {
    $product_id = $key;

    $quantity = $value;
    var_dump($product_id , $quantity);
    $order_product->insertOrderProduct($order_id,$product_id,$quantity);
  }
// foreach ($products as $product) {
  // var_dump($product[0);
  // console_log($product);
  // $product_id = $product[0];

  // $quantity = $product[1];
  // $order_product->insertOrderProduct($order_id,$product_id,$quantity);

// }
  
}

?>