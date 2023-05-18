

<?php



// include "include/connection.php";
include("../../App/models/Core/dbConnection.php");
$db = connectDb(); 
include "include/function/function.php";




if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(deleteProduct($db, $id)) {
        echo "Product data deleted successfully.";
        header("Location: products.php");
    } else {
        echo "Error deleting product data.";
    }
}

$db = null;
?>

