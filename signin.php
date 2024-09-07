<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" />
    <title>Todo App - Signup</title>

</head>

<body>

<div class="form-container">
    <form action="php/signup.php" method="POST">
        <h2>CREATE ACCOUNT</h2>
        <br>
        <div class="form-inputs">
            <label>
                <input placeholder="Enter username..." type="text" name="username" required />
            </label>
            <br>
            <br>


            <label>
                <input placeholder="Enter email..." type="email" name="email" required />
            </label>
            <br>
            <br>

            <label>
                <input placeholder="Enter password..." type="password" name="password"required />
            </label>
        </div>
        <br>
        <div class="submit-button">
             <button class="button" type="submit" name="submit">SIGNUP</button>
        <a href="index.php">Login account</a>
        </div>
       
    </form>
</div>
</body>
</html>