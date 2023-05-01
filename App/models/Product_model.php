
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Product{




    function selectALLProducts(){

        $conn = connectDb();
        
      
        $stmt = $conn->prepare("SELECT DISTINCT id, name, image , price FROM product");
          
          $stmt->execute();
          $order= $stmt->fetchAll();
          
          return $order;
        }
     }


  
 
?>





















