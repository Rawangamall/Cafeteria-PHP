<?php
$dsn = 'mysql:dbname=cafeteria;host=127.0.0.1;port=3308;';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    // do something with $db here
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


