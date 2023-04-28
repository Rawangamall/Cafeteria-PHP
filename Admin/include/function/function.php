<?php
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function deleteCategory($db, $id) {
    $sql = "DELETE FROM category WHERE id = ?";
    $stmt = $db->prepare($sql);
    return $stmt->execute([$id]);
}


function updateProduct($db, $id , $name, $price, $availability, $categoryID , $image) {
    $sql = "UPDATE users SET name = ?, price = ?, availability = ?, categoryID = ?, image = ? WHERE id = ?";
    $stmt= $db->prepare($sql);
    return $stmt->execute([$name, $price, $availability, $categoryID , $image]);
}


function updateCategory($db, $id, $name) {
    $sql = "UPDATE category SET name = ? WHERE id = ?";
    $stmt= $db->prepare($sql);
    return $stmt->execute([$name, $id]);
}


function deleteProduct($db, $id) {
    // get the image file name from the database
    $stmt = $db->prepare("SELECT image FROM product WHERE id = ?");
    $stmt->execute([$id]);
    $image = $stmt->fetchColumn();
    
    // delete the image file from the folder
    $path = "../../uploads/product/" . $image;
    if(file_exists($path)) {
        unlink($path);
    }
    
    // delete the product data from the database
    $stmt = $db->prepare("DELETE FROM product WHERE id = ?");
    return $stmt->execute([$id]);
}

?>

