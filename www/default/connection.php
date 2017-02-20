<?php
    $servername = "192.168.99.100";
    $username = "root";
    $password = "password";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=VenteProduits", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "You are correctly connect to ".$servername." :<br /><br />"; 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>