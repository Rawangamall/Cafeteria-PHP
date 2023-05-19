<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_Product_model.php");

$order = new Order();
// header('Content-Type: application/json');
//   $data = json_decode($_POST['jsondata']);
//   var_dump($data);


$jsondata = urldecode($_POST["jsondata"]);
$data = json_decode($jsondata, true);
var_dump($data);
var_dump("here");





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jsondata = urldecode($_POST["jsondata"]);
$data = json_decode($jsondata, true);
var_dump($data);
var_dump("here");

    // Validate user
    if (empty($data["user"]) || $data["user"] == "Select an user") {
        $errors[] = "Please select a user.";
    }
    else
    {
      $user_id = $data["user"];
    }

    // Validate room
    if (empty($data["room"]) || $data["room"] == "Select your room") {
        $errors[] = "Please select a room.";
    }
    else
    {
      $room_id = $data["room"];
    }

    // Validate products
    if (empty($data["products"])) {
        $errors[] = "Please add at least one product.";
    }
    else
    {
      $products = $data["products"];
    }
    if(!empty($data["note"]))
    {
      $note = $data["note"];
    }
    else
    {
      $note = "no note";
    }

   

    if (empty($errors)) {
      $amount = $data["total"];
        // No validation errors, proceed with saving the order
        $order = new Order();
        $order_product = new Order_Product();
  
        // ...

        $order_id = $order->insertOrder($note, $amount, $user_id);
        
        foreach ($products as $key => $value) {
          $product_id = $key;
      
          $quantity = $value;
          var_dump($product_id , $quantity);
          $order_product->insertOrderProduct($order_id,$product_id,$quantity);
        }

        // Return success response
        $response = array("status" => "success", "message" => "Order submitted successfully.");
        echo json_encode($response);
        exit;
    } else {
        // Validation errors occurred, return error response
        $response = array("status" => "error", "message" => implode("<br>", $errors));
        echo json_encode($response);
        exit;
    }
}
?>

?>