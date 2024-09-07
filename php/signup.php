<?php
include "config.php";  

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userId = uniqid('');


    // Query to check if email already exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);


     if (mysqli_num_rows($result) > 0) {
        header("location: ../signin.php?status=user_already_exist");
        exit();
    } else {
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into the database
        $query = "INSERT INTO users (userId, username, email, password) VALUES ('$userId','$username', '$email', '$hashedPassword')";

        if (mysqli_query($conn, $query)) {
            header("location: ../index.php?status=registered_successfully");
            exit();
        } else {
            echo "Error: Could not complete signup.";
            exit();
        }
    }
}
?>
