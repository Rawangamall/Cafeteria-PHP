

<?php



include "include/connection.php";
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

