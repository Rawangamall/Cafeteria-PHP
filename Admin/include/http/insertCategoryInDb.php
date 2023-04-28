
<?php
include "../function/function.php";

if(isset($_POST['name'])){

    $categoryName = validate($_POST["name"]);

    $data = 'name='.$categoryName ;

    if(empty($categoryName)){
        $em = "product name is required";
        header("Location: ../../addCategory.php?error=$em&$data");
        exit;
    } 
    else {
        include "../connection.php";

        $query = "INSERT INTO category(name) VALUES (:name)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $categoryName);
        $stmt->execute();

        $id = $db->lastInsertId();
        $sm = "product added successfully";
        header("Location: ../../category.php?success=$sm");
        exit;
    }
}
else{
    header("Location: ../../index.php");
    exit;
}
?>
