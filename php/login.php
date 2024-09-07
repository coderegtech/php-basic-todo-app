<?php
session_start();
include "config.php";  

if (isset($_POST['submit'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "Please fill in all fields.";
        exit();
    }

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['userId'] = $row['userId'];
            $_SESSION['username'] = $row['username'];
            header("location: ../todo.php?status=login_successfully");
        } else {
            header("location: ../index.php?status=wrong_password");
            exit();
        }
    } else {
        header("location: ../index.php?status=no_account_found");
        exit();
    }
}
?>
