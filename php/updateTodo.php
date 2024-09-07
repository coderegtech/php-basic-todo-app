<?php 
include 'config.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];

    // current todos
    $currentTodoQuery = "SELECT * FROM todos WHERE id = '$id'";
    $result = mysqli_query($conn, $currentTodoQuery);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $completed = $row['completed'];
        $toggleCompleted = $completed ? 0 : 1;
        $query = "UPDATE todos SET completed='$toggleCompleted' WHERE id = '$id'";

        if (mysqli_query($conn, $query)) {
            header("location: ../todo.php?status=todo_updated");
            exit();
        } else {
            echo "Error: Something went wrong!";
        }   
    }

	
}

?>