<?php
$servername = "localhost";
$username = "root";
$password = "1992";
$database = "aftklassik";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations here

// Close the connection
$conn->close();
?>
