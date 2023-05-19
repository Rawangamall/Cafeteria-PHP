
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("Core/dbConnection.php");


class Category{


    function selectALLCategories(){

        $conn = connectDb();
        
      
        $stmt = $conn->prepare("SELECT * FROM category ");
          
          $stmt->execute();
          $order= $stmt->fetchAll();
          
          return $order;
          $conn = null;

        }
     


  
}
?>





















