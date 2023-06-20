<?php
$conn = "";

try {
    $servername = "localhost";
    $dbname = "aftklassik";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername; dbname=aftklassik",$username, $password);

    
}




?>