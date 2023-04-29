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
      var_dump($row['id']);
   
        ?>
        
      <tr>
      <td><?php echo date('j F Y', strtotime($row['date'])); ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['room'];?></td>
        <td><?php echo $row['ext'];?></td>
        <td>
        <button class="deliver-btn" data-order-id="<?php echo $row['id']; ?>">Deliver </button>

  
  </td>
      </tr>
      
      <tr>
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
$('.deliver-btn').on('click', function() {
  console.log('clicked', $(this).data('orderId'));
  var orderId = $(this).data('orderId');
  $.ajax({
    url: '../../App/http/controllers/order/update_order_status.php',
    method: 'POST',
    data: {orderId: orderId, status: 'out of delivery'},
    success: function(response) {
      // Update the UI to show that the order has been delivered
      $(this).prop('disabled', true).text('Delivered');
    },
    error: function(jqXHR, textStatus, errorThrown) {
      console.error(errorThrown);
    }
  });
});
</script>
     <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <!-- <script src="jquery-3.5.1.js"></script>  -->
<?php
include "include/layouts/footer.php"
?>





























    

