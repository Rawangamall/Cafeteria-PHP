<?php include "include/layouts/header.php"; ?>

<div class="container-fluid">
<?php 
    // check if an error message was passed as a parameter
    if (isset($_GET['error'])) {
        $error = htmlspecialchars($_GET['error']);
        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
    }

    // get the value of the id parameter (if it was passed)
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    include "include/connection.php";

    // retrieve product data from database
    $sql = "SELECT * FROM product WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // retrieve category data from database
    $sql = "SELECT * FROM category";
    $stmt = $db->query($sql);
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Product</h1>
    </div>
    <div class="w-800 p-5 shadow rounded">
        <form method="post" action="./include/http/updateProductInDb.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $product['name']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price" value="<?php echo $product['price']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Availability:</label>
                <input type="text" name="availability" value="<?php echo $product['availability']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Category:</label>
                <select name="categoryId" class="form-control">
                    <?php 
                    foreach($categories as $category) {
                        if ($category['id'] == $product['categoryID']) {
                            echo "<option value='{$category['id']}' selected>{$category['name']}</option>";
                        } else {
                            echo "<option value='{$category['id']}'>{$category['name']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit"  value="Update Product" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include "include/layouts/footer.php"; ?>
