<?php 
// include "../connection.php";
include("../../../../App/models/Core/dbConnection.php");
$db = connectDb(); 

include "../function/function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = validate( $_POST["id"]);
    $name =validate(  $_POST["name"]);
    $price =validate(  $_POST["price"]);
    $availability = validate( $_POST["availability"]);
    $categoryID =validate(  $_POST["categoryId"]);
    $existingImage = validate( $_POST["image"]);

    if ($_FILES["image"]["name"]) {
        $target_dir = "../../uploads/product/";
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . $name . '.' . $imageFileType;
    
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                if ($existingImage != "") {
                    unlink($target_dir . $existingImage);
                }
                $image = $name . '.' . $imageFileType;
            } else {
                $image = $existingImage;
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit();
        }
    } else {
        $image = $existingImage;
    }
    

    $sql = "UPDATE product SET name = ?, price = ?, availability = ?, categoryID = ?, image = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $price, $availability, $categoryID, $image, $id]);

    header("Location: ../../products.php");
    exit();
    
} else {
    header("Location: ../../products.php");
    exit();
}
?>
