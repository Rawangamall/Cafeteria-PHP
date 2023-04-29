<?php

//for displaying errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("/opt/lampp/htdocs/cafeteria/App/models/user_model.php");

    $user=new User();
    $allusers= $user->selectAll();
    $usersamount= $user->totalamount();

   if (isset($_POST['userId']) && $_POST['userId'] != "") {
        $userId = $_POST['userId'];
        $Oneuser= $user->selectUser($userId);
        echo '
        <tr>
          <td>
            <button name="plus" class="btn"><i class="fa fa-plus"></i></button>
            <span class="btn-text">' . $Oneuser["name"] . '</span>
          </td>
        </tr>
      ';
    }
    
   // error_log(print_r($_POST, true));
//          <td>' . $Oneuser["total_amount"] . '</td>

    
?>