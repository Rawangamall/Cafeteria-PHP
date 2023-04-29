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

<div class="form-group col-lg-6" style="display:flex;" >
<form action="" method="">
<label for="from-date">FROM</label>
<input placeholder="Select date" type="date" id="from-date" name="Fromdate" class="form-control" style="display:inline-block;">
<label for="from-date">&nbsp;&nbsp;TO</label>
  <input placeholder="Select date" type="date" id="from-date" name="Todate" class="form-control" style="display:inline-block;">
</div>

<div class="form-group col-lg-6" style="margin-top:8px;">
                    <select class="form-control" name="userId" id="user-dropdown">
                      <option value="">Select User</option>
                      <?php foreach ($allusers as $user)  {?>
                      <option value="<?php echo $user["id"] ?>"><?php echo $user["name"] ?></option>
                      <?php }?>
                    </select>
                  </div>

                      </form>
<!-- ---------------------------------------------- -->
    <table class="table table-hover" style="text-align:center;" id="alluser">
      <thead>
        <tr>
          <th scope="col">Name </th>
          <th scope="col">Total amount</th>
        </tr>
      </thead>
      <?php
       foreach ($usersamount as $user){ ?>
      <tbody >
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
    <table class="table table-hover" style="text-align:center; visibility: hidden;" id="oneuser" >
      <thead>
        <tr>
          <th scope="col">Name </th>
          <th scope="col">Total amount</th>
        </tr>
      </thead>
      <tbody id="displayuser">

       </tbody>
       </table>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var dropdown = document.getElementById('user-dropdown');
        dropdown.addEventListener('change', function() {
      
      var userId = this.value;
      console.log(userId);
     var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../App/http/Controllers/CheckController.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {

      if (xhr.status === 200) {
      var response = xhr.responseText;
      document.getElementById("displayuser").innerHTML = response;
      document.getElementById("oneuser").style.visibility =" visible";
      document.getElementById("alluser").style.display = "none";
      console.log(response);

      }
    };
    console.log('userId', userId);
    xhr.send('userId=' + userId);
         });
   });
  
</script>

<?php
include "include/layouts/footer.php"
?>