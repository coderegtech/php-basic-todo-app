<?php 
include 'config.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$query = "DELETE FROM todos WHERE id = '$id'";

	if (mysqli_query($conn, $query)) {
            header("location: ../todo.php?status=todo_deleted");
            exit();
        } else {
            echo "Error: Something went wrong!";
        }	
}

?>