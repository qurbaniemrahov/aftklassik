<?php
session_start();


$conn = null;

try {
    $servername = "localhost:3306";
    $dbname = "aftklassik";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=aftklassik",$username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Connection Succes";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}



?>