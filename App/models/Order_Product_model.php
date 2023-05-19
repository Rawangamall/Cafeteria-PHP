
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Core/dbConnection.php");

class Order_Product{



function insertOrderProduct($order_id,$product_id,$quantity){
       
    $conn= connectDb();
   
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `order_product` (order_id, product_id, quantity) 
    VALUES (:order_id, :product_id, :quantity)");
    $stmt->bindParam(':order_id', $order_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->execute();
    $statement=$conn->prepare("SELECT LAST_INSERT_ID();");
    $statement->execute();
    $id=$statement->fetch();
    $conn = null;
   return $id[0];
}



  }
?>





















