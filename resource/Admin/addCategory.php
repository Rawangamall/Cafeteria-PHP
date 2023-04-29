<?php
include("include/layouts/header.php");


?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
    </div>
    <div class="w-800 p-5 shadow rounded">
        <form method="post" action="include/http/insertCategoryInDb.php" enctype="multipart/form-data">
            <?php 
            // check if an error message was passed as a parameter
            if (isset($_GET['error'])) {
                $error = htmlspecialchars($_GET['error']);
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
            }

            // get the values of the name and email parameters (if they were passed)
            $categoryName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
            ?>

            <div class="form-group">
                <label for="name">category</label>
                <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name" value="<?php echo $categoryName ?>">
            </div>
            <hr />
            <button type="submit" class="btn btn-prim">Save</button>
        </form>
        <div class="row pt-5">
            <div class="col-sm-6">
                <a href="category.php" class="text-decoration-none">Go to display category</a>
            </div>
            <div class="col-sm-6 text-right">
                <a href="addProduct.php" class="text-decoration-none">Go to add new product</a>
            </div>
        </div>
    </div>
</div>

<?php
include "include/layouts/footer.php";
?>
