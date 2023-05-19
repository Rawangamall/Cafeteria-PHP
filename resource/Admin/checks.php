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
        <!------------------------------ main page ------------------------->

<div class="form-group col-lg-6" style="display:flex;" >

<form id="date-form">
  <label for="from-date">FROM</label>
  <input placeholder="Select date" type="date" id="from-date" name="Fromdate" class="form-control" style="display:inline-block;">
  <label for="to-date">&nbsp;&nbsp;TO</label>
  <input placeholder="Select date" type="date" id="to-date" name="Todate" class="form-control" style="display:inline-block;">
</form>

</div>

<div class="form-group col-lg-6" style="margin-top:8px;">
                    <select class="form-control" name="userId" id="user-dropdown">
                      <option value="">Select User</option>
                      <?php foreach ($allusers as $user)  {?>
                      <option value="<?php echo $user["id"] ?>"><?php echo $user["name"] ?></option>
                      <?php }?>
                    </select>
                  </div>

        <!-- --------------------------------------------------------------- -->

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
          <button class="btn userbtn" data-userid="<?php echo $user["id"]; ?>"><i class="fa fa-plus"></i></button>
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

       <!-- ---------------------orders------------------------>
       
       <table class="table table-hover" style="text-align:center; visibility: hidden;" id="userOrders" >
      <thead>
        <tr>
          <th scope="col">Order Date </th>
          <th scope="col">Amount</th>
        </tr>
      </thead>
       <tbody id="displayorders">

       </tbody>
       </table>

       <table class="table table-hover" style="text-align:center; visibility: hidden;" id="orderproducts" >
      <thead>
        <tr>
          <th scope="col">Product Name </th>
          <th scope="col">Product Quantity</th>
        </tr>
      </thead>
       <tbody id="displayproducts">

       </tbody>
       </table>
</div>

<script>
// function sendDatesToController(fromDate, toDate , user_id) {
//   var xhr = new XMLHttpRequest();
//   xhr.open('POST', '../../App/http/Controllers/CheckController.php');
//   xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//   xhr.onload = function() {
//     if (xhr.status === 200) {
//       // Process the response
//       console.log(xhr.responseText)
//       var orders = JSON.parse(xhr.responseText);
//        console.log(orders);
//     } else {
//       console.error('Request failed. Status:', xhr.status);
//     }
    
//   };
//   // Create the payload with the selected dates
//   var data = 'fromDate=' + fromDate + '&toDate=' + toDate + '&user_id=' + user_id;
//   // Send the request
//   console.log('User ID:', user_id);

//   xhr.send(data);
// }

document.addEventListener('DOMContentLoaded', function() {
  var dropdown = document.getElementById('user-dropdown');
  dropdown.addEventListener('change', function() {
    var userId = this.value;


    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../App/http/Controllers/CheckController.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        var fromDateElement = document.getElementById('from-date');
    var toDateElement = document.getElementById('to-date');
    var originalFromDate = ""; 
    var originalToDate = "";

    
    // Check if the dates have been changed
    if (fromDateElement.value !== '') {
      originalFromDate = fromDateElement.value;
    }
    if (toDateElement.value !== '') {
      originalToDate = toDateElement.value;
    }
        var user = JSON.parse(xhr.responseText);
        document.getElementById("oneuser").style.visibility = "visible";
        document.getElementById("alluser").style.display = "none";

        var tbody = document.getElementById("displayuser");
        tbody.innerHTML = ""; // Clear existing rows

        var row = tbody.insertRow(0);
        var nameCell = row.insertCell(0);
        var amountCell = row.insertCell(1);

        const button = '<button class="btn userbtn" data-userid="' + user[0]['id'] + '"><i class="fa fa-plus"></i></button>';
        nameCell.innerHTML = user[0]['name'] + ' ' + button;
        amountCell.textContent = user[0]['total_amount'];

        // Add event listener to the button
        var buttonElement = nameCell.querySelector('.userbtn');
        buttonElement.addEventListener('click', function() {
          var iconElement = this.querySelector('i');
          if (iconElement.classList.contains('fa-plus')) {
            iconElement.classList.remove('fa-plus');
            iconElement.classList.add('fa-minus');
            console.log(fromDateElement.value);
            var user_id = user[0]['id'];
            // sendDatesToController(fromDateElement.value, toDateElement.value ,user_id);

            var BtnuserId = this.getAttribute('data-userid');

            var xhr2 = new XMLHttpRequest();
            xhr2.open('POST', '../../App/http/Controllers/CheckController.php');
            xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr2.onload = function() {
              if (xhr2.status === 200) {
                var orders = JSON.parse(xhr2.responseText);
                document.getElementById("userOrders").style.visibility = "visible";
                var tbody = document.getElementById("displayorders");
                tbody.innerHTML = ""; // Clear existing rows
                for (var i = 0; i < orders.length; i++) {
                  var order = orders[i];
                  var row = tbody.insertRow(i);
                  var dateCell = row.insertCell(0);
                  var amountCell = row.insertCell(1);
                  const button = '<button class="btn orderbtn" data-orderid="' + order[0] + '"><i class="fa fa-plus"></i></button>';
                  dateCell.innerHTML = order[3] + ' ' + button;
                  amountCell.textContent = order[5];

                  var buttonElement2 = dateCell.querySelector('.orderbtn');
                  buttonElement2.addEventListener('click', function() {
                    var iconElement = this.querySelector('i');
                    if (iconElement.classList.contains('fa-plus')) {
                      iconElement.classList.remove('fa-plus');
                      iconElement.classList.add('fa-minus');

                      var BtnorderId = this.getAttribute('data-orderid');
                      //    console.log('Button clicked with order ID:', BtnorderId);

                      // Send a request to get the details of the order
                      var xhr3 = new XMLHttpRequest();
                      xhr3.open('POST', '../../App/http/Controllers/CheckController.php');
                      xhr3.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                      xhr3.onload = function() {
                        if (xhr3.status === 200) {
                          var orderDetails = JSON.parse(xhr3.responseText);
                          document.getElementById("orderproducts").style.visibility = "visible";
                          var tbody = document.getElementById("displayproducts");
                          tbody.innerHTML = ""; // Clear existing rows
                          for (var i = 0; i < orderDetails.length; i++) {
                            var order = orderDetails[i];
                            var row = tbody.insertRow(i);

                            var nameCell = row.insertCell(0);
                            var quantityCell = row.insertCell(1);
                            var imageCell = row.insertCell(2);

                            nameCell.textContent = order[0];
                            const img = '<img src="assets/img/' + order[1] + '" class="card-img-top" style="max-width: 120px;"alt="Product Image">'
                            imageCell.innerHTML = img;
                            quantityCell.textContent = order[2];
                          }
                        }
                      };
                      xhr3.send('BtnorderId=' + BtnorderId);
                    } else {
                      iconElement.classList.remove('fa-minus');
                      iconElement.classList.add('fa-plus');
                      document.getElementById("orderproducts").style.visibility = "hidden";
                    }
                  });
                };
              }
            };
       var data = 'fromDate=' + fromDateElement.value + '&toDate=' + toDateElement.value + '&BtnuserId=' + BtnuserId;
       console.log(data)

            xhr2.send(data);
          } else {
            iconElement.classList.remove('fa-minus');
            iconElement.classList.add('fa-plus');
            document.getElementById("userOrders").style.visibility = "hidden";
            document.getElementById("orderproducts").style.visibility = "hidden";
          }

        });
      }
    };
    console.log('userId', userId);
    xhr.send('userId=' + userId);
  });
});

  // ---------------------------orders-----------------------------------


  var UserBtns = document.querySelectorAll(".userbtn");
   UserBtns.forEach(function(UserBtn) {
  UserBtn.addEventListener("click", function() {
    var iconElement = this.querySelector('i');
    if (iconElement.classList.contains('fa-plus')) {
      iconElement.classList.remove('fa-plus');
      iconElement.classList.add('fa-minus');
      var fromDateElement = document.getElementById('from-date');
    var toDateElement = document.getElementById('to-date');
    var originalFromDate = ""; 
    var originalToDate = "";

    
    // Check if the dates have been changed
    if (fromDateElement.value !== '') {
      originalFromDate = fromDateElement.value;
    }
    if (toDateElement.value !== '') {
      originalToDate = toDateElement.value;
    }
    var BtnuserId = UserBtn.getAttribute("data-userid");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../../App/http/Controllers/CheckController.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {

        console.log(xhr.responseText);
        var orders = JSON.parse(xhr.responseText);
     //   console.log(orders);
     document.getElementById("userOrders").style.visibility =" visible";
    var tbody = document.getElementById("displayorders");
    tbody.innerHTML = ""; // Clear existing rows
    for (var i = 0; i < orders.length; i++) {
  var order = orders[i];
  var row = tbody.insertRow(i);
  var dateCell = row.insertCell(0);
  var amountCell = row.insertCell(1);
  const button = '<button class="btn orderbtn" data-orderid="' + order[0] + '"><i class="fa fa-plus"></i></button>';
  dateCell.innerHTML = order[3] + ' ' + button; 
  amountCell.textContent = order[5];
  var buttonElement2 = dateCell.querySelector('.orderbtn');
          buttonElement2.addEventListener('click', function() {
            var iconElement = this.querySelector('i');
    if (iconElement.classList.contains('fa-plus')) {
      iconElement.classList.remove('fa-plus');
      iconElement.classList.add('fa-minus');

            var BtnorderId = this.getAttribute('data-orderid');
            console.log('Button clicked with order ID:', BtnorderId);

            // Send a request to get the details of the order
            var xhr3 = new XMLHttpRequest();
            xhr3.open('POST', '../../App/http/Controllers/CheckController.php');
            xhr3.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr3.onload = function() {
              if (xhr3.status === 200) {
                var orderDetails = JSON.parse(xhr3.responseText);
                  console.log(orderDetails);
                document.getElementById("orderproducts").style.visibility =" visible";
        var tbody = document.getElementById("displayproducts");
    tbody.innerHTML = ""; // Clear existing rows
    for (var i = 0; i < orderDetails.length; i++) {
  var order = orderDetails[i];
  var row = tbody.insertRow(i);

  var nameCell = row.insertCell(0);
  var quantityCell = row.insertCell(1);
  var imageCell = row.insertCell(2);

  nameCell.textContent = order[0] ;
  const img = '<img src="assets/img/'+order[1]+'" class="card-img-top" style="max-width: 120px;"alt="Product Image">'
  imageCell.innerHTML = img;
  quantityCell.textContent = order[2];

              }
            };
          }
            xhr3.send('BtnorderId=' + BtnorderId);
          } else {
      iconElement.classList.remove('fa-minus');
      iconElement.classList.add('fa-plus');
      document.getElementById("orderproducts").style.visibility ="hidden";
    }
          
          });
}
      }
    };
    var data = 'fromDate=' + fromDateElement.value + '&toDate=' + toDateElement.value + '&BtnuserId=' + BtnuserId;
       console.log(data)
    xhr.send(data);
  } else {
      iconElement.classList.remove('fa-minus');
      iconElement.classList.add('fa-plus');
      document.getElementById("userOrders").style.visibility ="hidden";
      document.getElementById("orderproducts").style.visibility ="hidden";
      }
  });
});


</script>

<?php
include "include/layouts/footer.php"
?>