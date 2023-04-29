<?php
include "include/layouts/header.php";
?>

<!-- Begin Page Content -->
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

    // retrieve category data from database
    $sql = "SELECT * FROM category WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $category = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Category</h1>
    </div>
    <div class="w-800 p-5 shadow rounded">
        <form method="POST" class="container" action="include/http/updateCategoryInDb.php">
            <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $category['name']; ?>" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

<?php
    include "include/layouts/footer.php";
?>



