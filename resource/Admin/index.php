<?php
include("include/layouts/header.php")
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manual Order</h1>

    </div>
        <!-------------------------------------------- main page ---------------------->

    <div class="col-md-12 d-flex">
        <div class="shadow col-md-4" >
            <div class="container p-3 ">
                <div class="row row-md-3 pt-3" id="formContainer">

                </div>
                <div class="form-group pt-5">
                    <label for="exampleTextarea">Notes</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <div class="form-group pt-3">
                    <label for="exampleDropdown">Room</label>
                    <div class="input-group">
                        <select class="form-control" id="exampleDropdown" name="room">
                            <option>Select your room</option>
                            <option value="--------">--------</option>
                            <?php
                                include "include/connection.php";
                                $sql = "SELECT DISTINCT room FROM users"; // get distinct room numbers from the database
                                $result = $db->query($sql);
                                if ($result->rowCount() > 0) {
                                    foreach ($result as $row) {
                                        echo '<option value="'.$row['room'].'">'.$row['room'].'</option>'; // generate an option for each room
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <hr class="my-4">

                <div class="form-group d-flex flex-column">
                    <div>Total: $<span id="total">0.00</span></div>
                    <button type="button" class="btn btn-success mt-2">Confirm</button>
                </div>



            </div>

        </div>
        <!--------------------------------------------------------------------------- section3 -->
        <div class="shadow col-md-8">
            <div class="row mt-4 px-3 ">
                <div class="container p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-control" id="dropdownMenuButton" name="user">
                                    <option>Select an user</option>
                                    <?php
                                        include "include/connection.php";
                                        $sql = "SELECT DISTINCT name FROM users"; 
                                        $result = $db->query($sql);
                                        if ($result->rowCount() > 0) {
                                            foreach ($result as $row) {
                                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>'; 
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------start row -->
            <div class="row mt-4 px-3">
                <div class="row">
                    <?php
                    include "include/connection.php";
                    $sql = "SELECT DISTINCT name, image , price FROM product"; 
                    $result = $db->query($sql); 
                    foreach ($result as $row) {
                        $src = "uploads/product/" . $row["image"];
                        $alt = "Product image";
                    
                    ?>
                        <div class="col-md-3 card text-center border border-0">
                            <div class="card-body p-2" id="productId">
                                <img src="<?php echo $src; ?>" alt="<?php echo $alt; ?>" data-bs-toggle="collapse" data-bs-target="#paragraph"  width='100' height='100'>
                                <p class="fw-bold text-uppercase text-center productName "><?php echo $row["name"]; ?></p>
                                <p class="fw-bold text-uppercase text-center productPrice"><?php echo $row["price"]; ?></p>

                            </div>
                        </div>
                    <?php } ?>
                </div>


            </div>
            <!--------------------------------------------end of row-->
        </div>  
                        
    </div>
</div>


<script>
  const productIds = document.querySelectorAll("#productId");

  productIds.forEach((productId) => {
    productId.addEventListener("click", () => {
      const formContainer = document.getElementById("formContainer");

      const formGroup = document.createElement("div");
      formGroup.classList.add("col");

      const label = document.createElement("label");
      label.classList.add("form-label");
      label.textContent = productId.querySelector(".productName").textContent;

      const input = document.createElement("input");
      input.classList.add("form-control");
      input.setAttribute("name", "productPrice");
      input.setAttribute("value", productId.querySelector(".productPrice").textContent);

      const cancelButton = document.createElement("button");
      cancelButton.classList.add("btn", "btn-danger");
      cancelButton.textContent = "X";
      cancelButton.addEventListener("click", () => {
        formContainer.removeChild(formGroup);
        calculateTotal();
      });

      formGroup.appendChild(label);
      formGroup.appendChild(input);
      formGroup.appendChild(cancelButton);

      formContainer.appendChild(formGroup);

      calculateTotal(); 
    });
  });

  function calculateTotal() {
    const inputs = document.querySelectorAll('input[name="productPrice"]');
    let total = 0;

    inputs.forEach(input => {
      total += parseFloat(input.value);
      input.removeEventListener("input", calculateTotal); 
      input.addEventListener("input", calculateTotal); 
    });

    const totalElement = document.getElementById("total");
    totalElement.textContent = total.toFixed(2);
  }
</script>




<?php
include "include/layouts/footer.php"
?>





























    

