<?php
session_start();

if (!$_SESSION['userId']) {
  header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Todo App</title>
</head>
<body>

<div class="todo">

    <header>
         <h1>Todo App</h1>

         <div>
            <p><?php echo $_SESSION['username']; ?></p> |
             <a class="logout" href="php/logout.php">logout</a>
         </div>
    </header>

   <br>

    <form action="php/addTodo.php" method="POST" class="todo-form">
        <input type="text" name="todo">
        <button type="submit" name="submit"><p>+</p></button>
    </form>
    <br>
    <div class="todos">
        
        <?php 
            include_once "php/config.php";

            $userId = $_SESSION['userId'];
            $query = "SELECT * FROM todos WHERE userId = '$userId'";

            $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $isCompleted = $row['completed'] ? 'completed' : 'incomplete';

                        echo '<ul>
                                    <li><h3>'.$row['todo'].'</h3></li>
                                    <li>
                                        <p class="edit-todo"><a href="php/updateTodo.php?id='.$row['id'].'">'.$isCompleted.'</a></p>
                                        <p class="delete-todo"><a href="php/delTodo.php?id='.$row['id'].'">Delete</a></p>
                                    </li>
                                </ul>';
                    }
                } else {
                    echo 'No todos available';
                }
        ?>
    </div>

</div>
    
</body>

</html>