

<?php



include "include/connection.php";
include "include/function/function.php";


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    if(deleteCategory($db, $id)) {
        echo "category data deleted successfully.";
        header("Location: category.php");

    } else {
        echo "Error deleting category data.";
    }
}

$db = null;
?>