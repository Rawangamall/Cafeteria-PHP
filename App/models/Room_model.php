
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Room{





function selectALLRooms(){

  $conn = connectDb();
  
 

  $stmt = $conn->prepare("SELECT * FROM rooms");
    
    $stmt->execute();
    $order= $stmt->fetchAll();
    return $order;
  }

  function selectALLRoomsName(){

    $conn = connectDb();
    
   
  
    $stmt = $conn->prepare("SELECT room_name FROM rooms");
      
      $stmt->execute();
      $order= $stmt->fetchAll();
      return $order;
    }
 }
?>





















