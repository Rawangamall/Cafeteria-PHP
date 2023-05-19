<?php

include("../../../../App/models/Core/dbConnection.php");
$db = connectDb(); 
// include_once "../connection.php";
include_once "../function/function.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    if(updateCategory($db, $id, $name)) {
        echo "Category data updated successfully.";
        header("Location: ../../category.php");
    } else {
        echo "Error updating category data.";
    }
} else {
    // Retrieve category data from database
    $id = $_GET['id'];
    $sql = "SELECT * FROM category WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $category = $stmt->fetch(PDO::FETCH_ASSOC);
}
