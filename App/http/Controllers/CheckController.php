<?php

//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../App/models/user_model.php");

    $user=new User();
    $allusers= $user->selectAll();
    $usersamount= $user->totalamount();

   // print_r($usersamount);
?>