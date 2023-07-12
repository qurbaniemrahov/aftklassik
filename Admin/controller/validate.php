
<?php

include_once('../controller/validate.php');



$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];


$stmt = $conn->prepare("SELECT * FROM admin_user WHERE user_email = :user_email AND user_password = :user_password");


$stmt->bindParam(':user_email', $user_email);
$stmt->bindParam(':user_password', $user_password);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    // Username and password are correct, redirect to the admin panel
    $_SESSION['user_email'] = $user_email;
    // header("Location: http://localhost/aftklassik/Admin/index.php"); // Replace admin_panel.php with the actual admin panel page
    print_r('success login');
} else {
    // Username or password is incorrect, redirect back to the login page
  //   echo '<script>
  //   alert("İstifadəçi adı və ya şifrə yanlışdır.");
  //   window.location.href = "http://localhost/aftklassik/public/sign-in/index.php"; // Replace login.php with the actual login page
  // </script>';
    // header("Location: http://localhost/aftklassik/public/sign-in/index.php"); // Replace login.php with the actual login page
    print_r('not logged in');
}

$conn = null;



?>

