

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css" />
    <title>Todo App - Login</title>
</head>

<body>

  <div class="form-container">
    <form action="php/login.php" method="POST" >
        <h2>LOGIN HERE</h2>
        <br>
        <div class="form-inputs">
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
          <button class="button" type="submit" name="submit">LOGIN</button>
        <a href="signin.php">Create account</a>
        </div>
        
    </form>
</div>
</body>
</html>