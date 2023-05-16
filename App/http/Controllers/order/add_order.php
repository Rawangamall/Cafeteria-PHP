<?php


//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once("C:/xampp/htdocs/php/ITI-Cafeteria/App/models/Core/dbConnection.php");

// require_once("../../../App/models/Order_model.php");
include("/opt/lampp/htdocs/cafeteria/App/models/Order_model.php");

$order = new Order();
// header('Content-Type: application/json');
//   $data = json_decode($_POST['jsondata']);
//   var_dump($data);

var_dump($_POST);

var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jsondata = urldecode($_POST["jsondata"]);
  $data = json_decode($jsondata, true);
  var_dump($data);
  var_dump("here");

  // Now you can access the data as an associative array
  $user = $data["user"];
  $room = $data["room"];
  $total = $data["total"];
  $note = $data["note"];
  $products = $data["products"];

  // Do something with the data...
}
?>