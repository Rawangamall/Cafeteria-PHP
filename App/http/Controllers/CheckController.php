<?php

//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("/opt/lampp/htdocs/cafeteria/App/models/user_model.php");
include("/opt/lampp/htdocs/cafeteria/App/models/Product_model.php");


      $product = new Product();
      $user=new User();

      $allusers= $user->selectAll();
      $usersamount= $user->totalamount();

        
    if (isset($_POST['userId']) && $_POST['userId'] != "") {
        $userId = $_POST['userId'];
        $Usertotal= $user->Usertotalamount($userId);

      header('Content-Type: application/json');
      echo json_encode($Usertotal); 
    }


    if(!empty($_POST['fromDate']) &&  !empty($_POST['toDate'])){

          //to be equal timestamp format
            $start = $_POST['fromDate'] . " 00:00:00";
            $end = $_POST['toDate'] . " 23:59:59";
              $user_id = $_POST['BtnuserId'];
              $userOrders= $user->selectUserOrdersFilter($user_id,$start,$end);

              header('Content-Type: application/json');
              echo json_encode($userOrders); 
            
     }
      
     else if(isset($_POST['BtnuserId'])&& ($_POST['fromDate'] == "" || $_POST['toDate'] == "")) {
      $userId = $_POST['BtnuserId'];
      $userOrders= $user->selectUserOrders($userId);

      header('Content-Type: application/json');
      echo json_encode($userOrders);  
      }
     

if (isset($_POST['BtnorderId']) && $_POST['BtnorderId'] != "") {
  
    $orderId = $_POST['BtnorderId'];
    $Orderproducts= $product->orderProducts($orderId);

    header('Content-Type: application/json');
    echo json_encode($Orderproducts);  
  }




?>