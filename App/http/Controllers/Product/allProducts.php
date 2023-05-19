<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Product_model.php");


$product = new Product();
$allProducts = $product->selectALLProducts();
// var_dump($_SERVER["REQUEST_METHOD"] );



?>