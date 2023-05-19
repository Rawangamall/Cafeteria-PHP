
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Core/dbConnection.php");

class Order{



function insertOrder($note,$amount,$userID){
       
    $conn= connectDb();
   
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `order` (note, amount, userID) 
    VALUES (:note, :amount, :userID)");
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':amount', $amount);
    $stmt->bindParam(':userID', $userID);
    $stmt->execute();
    $statement=$conn->prepare("SELECT LAST_INSERT_ID();");
    $statement->execute();
    $id=$statement->fetch();
    $conn = null;
   return $id[0];
}




function updateOrder($id,$status){
  $conn= connectDb();
  
  $stmt= $conn->prepare("UPDATE `order` SET `status` = '".$status."' WHERE `order`.`id` = '".$id."';");
  $stmt->execute();
  $order= $stmt->fetchAll();
  return $order;
}



function selectALLOrders($fromdate , $todate){

  $conn = connectDb();
  
  $stmt = $conn->prepare("SELECT u.name,u.room,u.ext, 
  o.*, 
  GROUP_CONCAT(
  JSON_OBJECT(
    'name', p.name,
    'price', p.price,
    'image', p.image,
    'quantity', op.quantity
  )
  ) AS products,
  SUM(p.price * op.quantity) AS total_price
  FROM `order` o 
  JOIN `users` u ON o.userID = u.id 
  JOIN order_product op ON op.order_id = o.id 
  JOIN product p ON p.id = op.product_id 
  WHERE o.status = 'processing'
  AND o.date >= CONCAT(:fromdate, ' 00:00:00')
    AND o.date <= CONCAT(:todate, ' 23:59:59')
  GROUP BY o.id
  ORDER BY o.id");

    $stmt->bindParam(':fromdate', $fromdate);
    $stmt->bindParam(':todate', $todate);
    $stmt->execute();
    $order= $stmt->fetchAll();
    return $order;
  }

  function selectALLOrdersforDeliver(){

    $conn = connectDb();
    
    $stmt = $conn->prepare("SELECT u.name,u.room,u.ext, 
    o.*, 
    GROUP_CONCAT(
    JSON_OBJECT(
      'name', p.name,
      'price', p.price,
      'image', p.image,
      'quantity', op.quantity
    )
    ) AS products,
    SUM(p.price * op.quantity) AS total_price
    FROM `order` o 
    JOIN `users` u ON o.userID = u.id 
    JOIN order_product op ON op.order_id = o.id 
    JOIN product p ON p.id = op.product_id 
    -- WHERE o.status = 'processing'
    GROUP BY o.id
    ORDER BY o.id");

      $stmt->execute();
      $order= $stmt->fetchAll();
      return $order;
    }
 }
?>





















