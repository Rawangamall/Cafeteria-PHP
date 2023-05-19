<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Category_model.php");


$category = new Category();
$allCategories = $category->selectALLCategories();

// var_dump($_SERVER["REQUEST_METHOD"] );



?>