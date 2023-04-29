<?php
include("include/layouts/header.php");
include("../../App/http/Controllers/CheckController.php");
?>
<style>
.btn{
  border: none;
  border-radius:50%;
  color:darkgrey;
  background-color:rgb(240, 154, 25);
  height:20px;
  width:20px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.btn:hover {
  background-color: white;
}
.btn-text {
  margin-left: 5px; /* adjust as needed */
}


</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Checks</h1>

    </div>
        <!-------------------------------------------- main page ---------------------->

<form action="" method=""> 
<div class="form-group col-lg-6" style="display:flex;" >

<label for="from-date">FROM</label>
<input placeholder="Select date" type="date" id="from-date" name="Fromdate" class="form-control" style="display:inline-block;">
<label for="from-date">&nbsp;&nbsp;TO</label>
  <input placeholder="Select date" type="date" id="from-date" name="Todate" class="form-control" style="display:inline-block;">
</div>

<div class="form-group col-lg-6" style="margin-top:8px;">
                    <select class="form-control" name="room">
                      <option value="">Select User</option>
                      <?php foreach ($allusers as $user)  {?>
                      <option value="<?php $user["name"] ?>"><?php echo $user["name"] ?></option>
                      <?php }?>

                    </select>
                  </div>

</form>
    <table class="table table-hover" style="text-align:center;">
      <thead>
        <tr>
          <th scope="col">Name </th>
          <th scope="col">Total amount</th>
        </tr>
      </thead>
      <?php foreach ($usersamount as $user){ ?>
      <tbody>
        <tr>
          <td>
            <button name="plus" class="btn"><i class="fa fa-plus"></i></button>
            <span class="btn-text"><?php echo $user["name"] ?></span>
          </td>
          <td><?php echo $user["total_amount"] ?></td>
        </tr>
      </tbody>
      <?php } ?>

    </table>

</div>



<?php
include "include/layouts/footer.php"
?>