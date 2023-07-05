
<?php 
include('connection.php');


// insert data to database
if($_SERVER['REQUEST_METHOD'] === 'POST') {
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
$sql = "CREATE TABLE IF NOT EXISTS 
admin_user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_name VARCHAR(100) NOT NULL,
            user_email VARCHAR(100) NOT NULL,
            user_password VARCHAR(100) NOT NULL
            )";
}


if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->errorInfo()[2];
}



$sql = "INSERT INTO admin_user (id, user_name, user_email, user_password) VALUES ('$id', '$user_name', '$user_email', '$user_password')";

if ($conn->query($sql) === TRUE) {
    echo "User created successfully";
} else {
    echo "Error creating user: " . $conn->errorInfo()[2];
}
// insert data to database

$sql = "SELECT * FROM admin_user";
$stmt = $conn->query($sql);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);




// print_R($result);
// die();




?>
