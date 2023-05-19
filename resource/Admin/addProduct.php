<?php
include("include/layouts/header.php");

// include "include/connection.php";
include("../../App/models/Core/dbConnection.php");
$db = connectDb(); 
// Fetch the categories from the database
$sql = "SELECT * FROM category";
$result = $db->query($sql);

?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
    </div>
    <div class="w-800 p-5 shadow rounded">
        <form method="post" action="include/http/insertProductInDb.php" enctype="multipart/form-data">
            <?php 
            // check if an error message was passed as a parameter
            if (isset($_GET['error'])) {
                $error = htmlspecialchars($_GET['error']);
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }

            // get the values of the name and email parameters (if they were passed)
            $productName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
            $price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : '';
            ?>

            <div class="form-group">
                <label for="name">Product:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="<?php echo $productName ?>">
            </div>
            <div class="form-group">
                <label for="price_id">Price:</label>
                <input type="text" class="form-control" id="price_id" placeholder="Price" name="price" inputmode="numeric" value="<?php echo $price ?>">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <div class="input-group">
                    <select class="form-control" id="category" name="category">
                        <?php foreach ($result as $category) { ?>
                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                        <?php } ?>
                    </select>
                    <a href="addCategory.php" class="btn btn-primary" type="button" >Add new category</a>
                </div>
            </div>
            <div class="form-group py-3">
                <label for="product_pic">Product Picture:</label>
                <input type="file" class="form-control-file" id="product_pic" name="image">
            </div>
            <hr />
            <button type="submit" class="btn btn-prim">Save</button>
        </form>
    </div>
</div>

<?php
include "include/layouts/footer.php";
?>
