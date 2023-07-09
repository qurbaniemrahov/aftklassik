
<?php
// include('../../config/connection.php');

// // Insert data into the database
// if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['user_add'])) {
   
//     if (isset($_POST['user_name'], $_POST['user_email'], $_POST['user_password'])) {
//         $user_name = $_POST['user_name'];
//         $user_email = $_POST['user_email'];
//         $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

//         $sql = "CREATE TABLE IF NOT EXISTS 
//             admin_user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                         user_name VARCHAR(100) NOT NULL,
//                         user_email VARCHAR(100) NOT NULL,
//                         user_password VARCHAR(100) NOT NULL
//             )";
    
//         if ($conn->query($sql) === FALSE) {
//             echo "Error creating table: " . $conn->errorInfo()[2];
//         }

//         $sql = "INSERT INTO admin_user (user_name, user_email, user_password) VALUES (?, ?, ?)";
//         $stmt = $conn->prepare($sql);
//         $stmt->execute([$user_name, $user_email, $user_password]);

//         if ($stmt) {
//             echo "User created successfully";
//         } else {
//             echo "Error creating user: " . $stmt->errorInfo()[2];
//         }
//     } else {
//         // Handle the case when one or more fields are not set
//         echo "Please fill in all the required fields.";
//     }
// }



// // Select all users from the database
// $sql = "SELECT * FROM admin_user";
// $stmt = $conn->query($sql);
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// // Admin user delete
// if (isset($_POST['user_delete'])) {

    
//     $user_id = $_POST['user_delete'];

    
    
//     try {
//         $query = "DELETE FROM admin_user WHERE id=:user_id";
//         $statement = $conn->prepare($query);
//         $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
//         $query_execute = $statement->execute();

//         if ($query_execute) {
//             echo "Deleted successfully";
//         } else {
//             echo "Not deleted";
//         }
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
// }

// //Admin user update
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_edit'])) {
//     if (isset($_POST['user_id'], $_POST['user_name'], $_POST['user_email'], $_POST['user_password'])) {
        
//         $user_name = $_POST['user_name'];
//         $user_email = $_POST['user_email'];
//         $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

//         $sql = "UPDATE admin_user SET user_name = ?, user_email = ?, user_password = ? WHERE id = ?";
//         $stmt = $conn->prepare($sql);
//         $stmt->execute([$user_name, $user_email, $user_password]);

//         if ($stmt) {
//             echo "User updated successfully";
//         } else {
//             echo "Error updating user: " . $stmt->errorInfo()[2];
//         }
//     } else {
//         // Handle the case when one or more fields are not set
//         echo "Please fill in all the required fields.";
//     }
// }


include('../../config/connection.php');

// Insert data into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_add'])) {

    if (isset($_POST['user_name'], $_POST['user_email'], $_POST['user_password'])) {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

        $sql = "CREATE TABLE IF NOT EXISTS admin_user (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_name VARCHAR(100) NOT NULL,
            user_email VARCHAR(100) NOT NULL,
            user_password VARCHAR(100) NOT NULL
        )";

        if ($conn->query($sql) === FALSE) {
            echo "Error creating table: " . $conn->errorInfo()[2];
        }

        $sql = "INSERT INTO admin_user (user_name, user_email, user_password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user_name, $user_email, $user_password]);

        if ($stmt) {
            echo "User created successfully";
        } else {
            echo "Error creating user: " . $stmt->errorInfo()[2];
        }
    } else {
        // Handle the case when one or more fields are not set
        echo "Please fill in all the required fields.";
    }
}

// Select all users from the database
$sql = "SELECT * FROM admin_user";
$stmt = $conn->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Admin user delete
if (isset($_POST['user_delete'])) {
    $user_id = $_POST['user_delete'];

    try {
        $query = "DELETE FROM admin_user WHERE id=:user_id";
        $statement = $conn->prepare($query);
        $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $query_execute = $statement->execute();

        if ($query_execute) {
            echo "Deleted successfully";
        } else {
            echo "Not deleted";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// Admin user update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_edit'])) {
    if (isset($_POST['user_id'], $_POST['user_name'], $_POST['user_email'], $_POST['user_password'])) {

        $user_id = $_GET['user_id'];
        $user_name = $_GET['user_name'];
        $user_email = $_GET['user_email'];
        $user_password = password_hash($_GET['user_password'], PASSWORD_DEFAULT);

        $sql = "UPDATE admin_user SET user_name = ?, user_email = ?, user_password = ? WHERE id = id=:user_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$user_name, $user_email, $user_password, $user_id]);

        if ($stmt) {
            echo "User updated successfully";
        } else {
            echo "Error updating user: " . $stmt->errorInfo()[2];
        }
    } else {
        // Handle the case when one or more fields are not set
        echo "Please fill in all the required fields.";
    }
    
}













?>

