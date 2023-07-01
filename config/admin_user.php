
<?php 
include('connection.php');


$sql = "CREATE TABLE IF NOT EXISTS 
admin_user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_email VARCHAR(100) NOT NULL,
            user_password VARCHAR(100) NOT NULL
            )";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->errorInfo()[2];
}

$user_email = "info@aftklassik.com";
$user_password = password_hash("", PASSWORD_DEFAULT); // Hash the password for security

$sql = "INSERT INTO admin_user (user_email, user_password) VALUES ('$user_email', '$user_password')";

if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error creating user: " . $conn->errorInfo()[2];
}







?>
