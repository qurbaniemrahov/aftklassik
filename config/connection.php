<?php
session_start(); // Start the session

$conn = "";

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
}




?>