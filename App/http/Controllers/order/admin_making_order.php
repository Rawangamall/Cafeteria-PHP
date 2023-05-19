
<?php
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Order_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/user_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Room_model.php");
include("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Product_model.php");


// require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");


$room = new Room();
$allRooms = $room->selectALLRooms();

$product = new Product();
$allProducts = $product->selectALLProducts();

$user = new User();
$allUsers = $user->selectAll();


?>