<?php
include("include/layouts/header.php");
include("../../App/http/controllers/order/admin_making_order.php");
// include("../../App/http/controllers/order/add_order.php");

// include("../../App/http/controllers/order/add_order.php");?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Make Order</h1>

    </div>
        <!-------------------------------------------- main page ---------------------->

    <div class="col-md-12 d-flex">
        <div class="shadow col-md-5" >
            <div class="container p-3 ">
                <div class="row row-md-3 pt-3" id="formContainer">
                <div class="card">
  <div class="card-header">Selected Products</div>
  <div class="card-body">
    <table id="table" class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>total Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    
  </div>
</div>
                </div>
                <div class="form-group pt-3">
                    <label for="exampleTextarea">Notes</label>
                    <textarea class="form-control" id="note" rows="3"></textarea>
                </div>
                <div class="form-group pt-3">
                    <label for="exampleDropdown">Room</label>
                    <div class="input-group">
                        <select class="form-control" id="exampleDropdown" name="room" required>
                            <option>Select your room</option>
                           <?php foreach ($allRooms as $room) {
                                echo '<option value="'.$room['id'].'">'.$room['room_name'].'</option>';
                            }
                            ?>
                         
                           
                        </select>
                    </div>
                </div>
                <hr class="my-4">

                <div class="form-group d-flex flex-column">
                    <div>Total: EGP <span id="total">0.00</span></div>
                    <button type="button" id="addorder" class="btn btn-success mt-2">Order</button>
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
                            <input type="text" class="form-control" placeholder="Search" id="searchInput">                                <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="col-md-6">
                            <div class="input-group">
                              
                            <select class="form-control" id="dropdownMenuButton" name="user" required>
                                    <option>Select an user</option>
                                    <?php foreach ($allUsers as $user) {
                                        echo '<option value="'.$user['id'].'">'.$user['name'].'</option>';
                                        }
                                        ?>
                                   
                                        <!-- // include "include/connection.php";
                                        $sql = "SELECT DISTINCT name FROM users"; 
                                        $result = $db->query($sql);
                                        if ($result->rowCount() > 0) {
                                            foreach ($result as $row) {
                                                echo '<option value="'.$row['name'].'">'.$row['name'].'</option>'; 
                                            }
                                        } -->
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------start row -->
           
            <div class="row mt-4 px-3" >
                <div class="row col" >
                    <?php
                    // include "include/connection.php";
                    // $sql = "SELECT DISTINCT name, image , price FROM product"; 
                    // $result = $db->query($sql); 
                   
                    foreach ($allProducts as $product) {
                        $src = "uploads/product/" . $product["image"];
                        $alt = "Product image";
                        
                    
                    ?>
                        <div class="col-md-3 card text-center border border-0" id="filteredProducts">
                            <div class="card-body p-2 productId" id="<?php echo $product["id"]; ?>">
                                <img src="pepsi2.png" alt="<?php echo $alt; ?>" data-bs-toggle="collapse" data-bs-target="#paragraph"  width='100' height='100'>
                                <p class="fw-bold text-uppercase text-center productName "><?php echo $product["name"]; ?></p>
                                <p class="fw-bold text-uppercase text-center productPrice"><?php echo $product["price"]; ?></p>

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
  // Get all product cards
  const productCards = document.querySelectorAll('.productId');

// Get the search input field
const searchInput = document.querySelector('#searchInput');

// Get the filtered products container
const filteredProducts = document.querySelector('#filteredProducts');

// Add a listener for changes to the search input field
searchInput.addEventListener('input', () => {
    const searchString = searchInput.value.toLowerCase();

    // Remove all products from the filtered products container
    filteredProducts.innerHTML = '';

    // Loop through all product cards and add them to the filtered products container if they match the search string
    productCards.forEach(card => {
        const productName = card.querySelector('.productName').textContent.toLowerCase();
        if (productName.includes(searchString)) {
            filteredProducts.appendChild(card);
        }
    });
});

  const productIds = document.querySelectorAll(".productId");

  productIds.forEach((productId) => {
    productId.addEventListener("click", handleClick);
  });

  function handleClick() {
     const productId = this;
    productId.removeEventListener("click", handleClick);

    const table = document.getElementById("table");
    const tbody = table.querySelector("tbody");

    const tr = document.createElement("tr");
    tr.setAttribute("id", productId.id );
    // tr.dataset.productId = productId.id;

    
    const nameTd = document.createElement("td");
    // var id = productId.id

    // nameTd.setAttribute("id", id );

    nameTd.textContent = productId.querySelector(".productName").textContent;

    const quantityTd = document.createElement("td");
    const quantityInput = document.createElement("input");
    quantityInput.classList.add("form-control");
    quantityInput.setAttribute("type", "number");
    quantityInput.setAttribute("min", 0);
    quantityInput.setAttribute("value", 1);
    quantityTd.appendChild(quantityInput);

    const priceTd = document.createElement("td");
    priceTd.textContent = productId.querySelector(".productPrice").textContent;

    const totalTd = document.createElement("td");
    totalTd.textContent = priceTd.textContent;

    const removeTd = document.createElement("td");
    const removeButton = document.createElement("button");
    removeButton.classList.add("btn", "btn-danger");
    removeButton.textContent = "X";
    removeButton.addEventListener("click", () => {
      tbody.removeChild(tr);
      productId.addEventListener("click", handleClick);
      calculateTotal();
    });
    removeTd.appendChild(removeButton);

    tr.appendChild(nameTd);
    tr.appendChild(quantityTd);
    tr.appendChild(priceTd);
    tr.appendChild(totalTd);
    tr.appendChild(removeTd);

    tbody.appendChild(tr);

    quantityInput.addEventListener("input", () => {
      const quantity = parseInt(quantityInput.value);
      const price = parseFloat(priceTd.textContent);
      totalTd.textContent = (quantity * price).toFixed(2);
      calculateTotal();
    });

    calculateTotal();
  }

  function calculateTotal() {
    const rows = document.querySelectorAll("#table tbody tr");
    let total = 0;

    rows.forEach(row => {
      const quantityInput = row.querySelector("input[type='number']");
      const priceTd = row.querySelector("td:nth-child(3)");
      const totalTd = row.querySelector("td:nth-child(4)");

      const quantity = parseInt(quantityInput.value);
      const price = parseFloat(priceTd.textContent);
      const totalProduct = quantity * price;

      total += totalProduct;

      totalTd.textContent = totalProduct.toFixed(2);
    });

    const totalElement = document.getElementById("total");
    totalElement.textContent = total.toFixed(2);
  }

    const confirmButton = document.getElementById("addorder");
confirmButton.addEventListener("click", () => {
  const rows = document.querySelectorAll("#table tbody tr");
  const user = document.querySelector("select[name='user']").value;
  const room = document.querySelector("select[name='room']").value;
  const total = document.getElementById("total").textContent;
  const note = document.getElementById("note").value;

  const data = {
  user: user,
  room: room,
  total: total,
  note: note,
  products: {}
};

rows.forEach(row => {
  const productId = row.id;
  const quantityInput = row.querySelector("input[type='number']");
  const quantity = parseInt(quantityInput.value);
  data.products[productId] = quantity;
  // data.products[quantity] = quantity;

});


const jsonData = JSON.stringify(data); 
const params = 'jsondata=' + jsonData;

const xhr = new XMLHttpRequest();
xhr.open('POST', '../../App/http/controllers/order/add_order.php');
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    console.log("respovsee"+xhr.responseText);
  }
};
console.log(params);
xhr.send(params);


});




</script>


<?php
include "include/layouts/footer.php"
?>



























    

