<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {


	$todo = $_POST['todo'];
	$userId = $_SESSION['userId'];
	$query = "INSERT INTO todos (userId, todo, completed) VALUES ('$userId', '$todo', false)";

	if (mysqli_query($conn, $query)) {
            header("location: ../todo.php?status=todo_added");
            exit();
        }else {
            echo "Error: Something went wrong!";
        }
 	}
?>