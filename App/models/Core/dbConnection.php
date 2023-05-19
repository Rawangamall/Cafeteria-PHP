<?php
// connect to database
if (!function_exists('connectdb')) {
    function connectDb(){

        $db_user = "php-jimmy";
        $db_pass = "Aa123456";
        $db_name = "php-jimmy";
        
        try{
    
            $db = new PDO('mysql:host=nader-mo.tech;port=3306;dbname='.$db_name.";",$db_user,$db_pass);
            // set the PDO error mode to exception
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $db;
            }catch(PDOException $e)
            {
             echo "Error: " . $e->getMessage();
            }
    }
}

?>