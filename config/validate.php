<?php
include_once('./connection.php');

$enteredUsername = $_POST['username'];
$enteredPassword = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM aftlogin WHERE username = :username AND password = :password");

$stmt->bindParam(':username', $enteredUsername);
$stmt->bindParam(':password', $enteredPassword);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    // Username and password are correct, redirect to the admin panel
    $_SESSION['username'] = $enteredUsername;
    header("Location: http://localhost/aftklassik/Admin/about_create.php"); // Replace admin_panel.php with the actual admin panel page
} else {
    // Username or password is incorrect, redirect back to the login page
    alert('yanlis istifadeci adi');
    header("Location: http://localhost/aftklassik/public/sign-in/index.php"); // Replace login.php with the actual login page
}

$conn = null;



?>

