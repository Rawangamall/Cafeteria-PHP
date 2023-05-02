<?php

//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("/opt/lampp/htdocs/cafeteria/App/models/user_model.php");
include("/opt/lampp/htdocs/cafeteria/App/models/Order_model.php");

    $user=new User();
    $allusers= $user->selectAll();
    $usersamount= $user->totalamount();

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
?>