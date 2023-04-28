<?php
include "../function/function.php";

if(isset($_POST['name']) &&
   isset($_POST['price']) &&
   isset($_POST['category']) &&
   isset($_FILES['image'])){

    $productName = validate($_POST["name"]);
    $price = validate($_POST["price"]);
 
    $data = 'name='.$productName . '&price='.$price ;

    if(empty($productName)){
        $em = "product name is required";
        header("Location: ../../addProduct.php?error=$em&$data");
        exit;
    } elseif(empty($price)){
        $em = "price is required";
        header("Location: ../../addProduct.php?error=$em&$data");
        exit;
    } 
    else {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpeg", "jpg", "png");

        if(in_array($file_ext, $extensions) === false) {
            $em = "extension not allowed, please choose a JPEG, JPG, or PNG file.";
            header("Location: ../../addProduct.php?error=$em&$data");
            exit;
        }

        if($file_size > 2097152) {
            $em = 'File size must be excately 2 MB';
            header("Location: ../../addProduct.php?error=$em&$data");
            exit;
        }

        $desired_name = $productName; // set your desired name here
        $pic = $desired_name . "." . $file_ext;
        move_uploaded_file($file_tmp, "../../uploads/product/" . $pic);

        include "../connection.php";

        $query = "INSERT INTO product(name, price, image, categoryID) VALUES(:name, :price, :image, :categoryID)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $productName);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $pic);
        $stmt->bindParam(':categoryID', $_POST['category']);
        $stmt->execute();

        $id = $db->lastInsertId();
        $sm = "product added successfully";
        header("Location: ../../products.php?success=$sm");
        exit;
    }
}
else{
    header("Location: ../../index.php");
    exit;
}
?>
