<?php
include("include/layouts/header.php")
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <a href="addCategory.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Add new category</a>
    </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-center">category name</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // include "include/connection.php";
                    include("../../App/models/Core/dbConnection.php");
                    $db = connectDb(); 
                    // select data from database
                    $sql = "SELECT * FROM category";
                    $result = $db->query($sql);

                    // loop through results and display data in table
                    if ($result->rowCount() > 0) {
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td >" . $row["name"] . "</td>";
                            echo '<td class="text-right"><a class="btn btn-info" href="updateCategory.php?id=' . $row["id"] . '">Update</a> | <a class="btn btn-danger" href="deleteCategory.php?id=' . $row["id"] . '">Delete</a></td>';
                            echo "</tr>";

                        }
                    } else {
                        echo "No data found.";
                    }
                ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php
include "include/layouts/footer.php"
?>
