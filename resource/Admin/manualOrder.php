<?php
include("include/layouts/header.php");
include("../../App/http/controllers/order/manual_oder.php");

?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Orders </h1>
    </div>
        <!-------------------------------------------- main page ---------------------->


 <table class="table  ">
  <thead>
    <tr class="table-dark">
      <th scope="col">Order Date</th>
      <th scope="col">Name</th>
      <th scope="col">Room</th>
      <th scope="col">Ext.</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    

    foreach ($allOrders as  $row) : 
   
        ?>
        
      <tr class="$row['id']">
      <td><?php echo date('j F Y', strtotime($row['date'])); ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['room'];?></td>
        <td><?php echo $row['ext'];?></td>
        <td>
        <button class="btn btn-primary deliver-btn" data-order-id="<?php echo $row['id']; ?>">Deliver</button>
  
  </td>
      </tr>
      
      <tr class="$row['id']">
        <td colspan="5">
          <div class="card-group">
            <?php $productArray = json_decode('[' . $row["products"] . ']', true);
                  foreach ($productArray as $product) {
   
  ?>
              <div class="card col-2" style="width: 10rem;">
                <img src="assets/img/pepsi2.png" class="card-img-top" style="max-width: 120px;"alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product['name']?></h5>
                  <p class="card-text"><?php echo $product['quantity'];?></p>
                </div>
              </div>
            <?php  }?>

          </div>
          <h5 class="card-title mt-5">total Price :<?php echo $row['total_price'];?> </h5>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
</div>
<script>
document.querySelectorAll('.deliver-btn').forEach(function(button) {
  button.addEventListener('click', function() {
    var xhr = new XMLHttpRequest();
    xhr.ope./n('POST', '.../App/http/controllers/order/update_order_status.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        // Update the UI to show that the order has been delivered
        button.disabled = true;
        button.textContent = 'Delivered';
        // Remove the row from the table
         row = button.closest('tr');
       

        row.parentNode.removeChild(row.nextElementSibling);
        row.parentNode.removeChild(row);
      } else {
        console.error('Error:', xhr.statusText);
      }
    };
    xhr.onerror = function() {
      console.error('Error:', xhr.statusText);
    };
    xhr.send('orderId=' + button.getAttribute('data-order-id') + '&status=out of delivery');
  });
});

</script>
<?php
include "include/layouts/footer.php"
?>





























    

