<?php

 include("Core/dbConnection.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class User 
{
   

    function selectAll(){ 
       
        $conn= connectDb();
        $stmt= $conn->prepare("SELECT * FROM users where role = 'user'");
        $stmt->execute();
        $allUsers = $stmt->fetchAll();

        return $allUsers;
        $conn = null;

    }

    function totalamount(){
        $conn= connectDb();

        $stmt = $conn->prepare("SELECT u.id, u.name, SUM(o.amount) as total_amount 
        FROM users u INNER JOIN `order` o ON u.id = o.userID GROUP BY u.id");

        $stmt->execute();
        $totalamount = $stmt->fetchAll();  
        
        return $totalamount;
        $conn = null;
    }

    function Usertotalamount($id){
        $conn= connectDb();

        $stmt = $conn->prepare("SELECT u.id ,u.name, SUM(o.amount) as total_amount 
        FROM users u INNER JOIN `order` o ON u.id = o.userID and u.id = $id");

        $stmt->execute();
        $totalamount = $stmt->fetchAll();  
        
        return $totalamount;
                $conn = null;
    }

    function order_products($id){
        $conn= connectDb();

    } 
    

    function selectUser ($id){
        $conn=  connectDb();
        $stmt= $conn->prepare("SELECT * FROM users WHERE id= $id ;");
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
       
        $conn = null;
    }

    function selectUserOrders ($id){
        $conn=  connectDb();
        $stmt= $conn->prepare("SELECT * FROM `order`o WHERE o.userID = $id;");
        $stmt->execute();
        $userOrders = $stmt->fetchAll();
        return $userOrders;
       
        $conn = null;
    }

    function selectUserOrdersFilter($id, $start, $end) {
        $conn = connectDb();
        $stmt = $conn->prepare("SELECT * FROM `order` o WHERE o.userID = :id AND o.date >= :start AND o.date <= :end");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':start', $start);
        $stmt->bindParam(':end', $end);
        $stmt->execute();
        $userOrders = $stmt->fetchAll();
        return $userOrders;
    }
    
  
}
?>