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

    if (isset($_POST['Fromdate']) && isset($_POST['Todate'])) {
      $fromDate = $_POST['Fromdate'];
      $toDate = $_POST['Todate'];
      echo "Received data: FROM = " . $fromDate . ", TO = " . $toDate;
      
    }else{
    if (isset($_POST['userId']) && $_POST['userId'] != "") {
        $userId = $_POST['userId'];
        $Usertotal= $user->Usertotalamount($userId);

      header('Content-Type: application/json');
      echo json_encode($Usertotal); 
    }


    if (isset($_POST['BtnuserId']) && $_POST['BtnuserId'] != "") {
        $userId = $_POST['BtnuserId'];
        $userOrders= $user->selectUserOrders($userId);

        header('Content-Type: application/json');
        echo json_encode($userOrders);  
      }
      $Orderproducts= $product->orderProducts(2);

  if (isset($_POST['BtnorderId']) && $_POST['BtnorderId'] != "") {
    $orderId = $_POST['BtnorderId'];
    $Orderproducts= $product->orderProducts($orderId);

    header('Content-Type: application/json');
    echo json_encode($Orderproducts);  
  }
} 

if( isset($_POST['fromDate']) &&  $_POST['fromDate']!= "" && isset($_POST['toDate']) &&  $_POST['toDate']!= "" ){
$start = $_POST['fromDate'] . " 00:00:00";
$end = $_POST['toDate'] . " 12:59:59";

 header('Content-Type: application/json');
 echo json_encode($start);
}

?>