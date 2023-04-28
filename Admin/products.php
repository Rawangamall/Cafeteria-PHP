<?php
include("include/layouts/header.php")
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
        <a href="addProduct.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Add new product</a>
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
                                        <th>product name</th>
                                        <th>price</th>
                                        <th>availability</th>
                                        <th>category</th>

                                        <th>Img</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "include/connection.php";
                                // select data from database
                                $sql = "SELECT p.id, p.name, p.price, p.availability, c.name as category, p.image FROM product p INNER JOIN category c ON p.categoryID = c.id";
                                $result = $db->query($sql);

                                // loop through results and display data in table
                                if ($result->rowCount() > 0) {
                                    foreach ($result as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["name"] . "</td>";
                                        echo "<td>" . $row["price"] . "</td>";
                                        echo "<td>" . $row["availability"] . "</td>";
                                        echo "<td>" . $row["category"] . "</td>";
                                        echo "<td><img src='uploads/product/" . $row["image"] . "' width='100' height='100'></td>";
                                        echo '<td><a class="btn btn-info" href="update.php?id=' . $row["id"] . '">Update</a> | <a class="btn btn-danger" href="delete.php?id=' . $row["id"] . '">Delete</a></td>';
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





























    

