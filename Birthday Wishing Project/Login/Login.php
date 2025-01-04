<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <h1>Login Form</h1>
        <h2>Please fill this out</h2>
    </div>
    <main>
        <br>
        <form action="Login.php" method="post">
            <label for="username" class="form">Username:</label>
            <input type="username" id="username" name="username" class="form">
            
            <br>

            <label for="password" class="form">Password:</label>
            <input type="password" id="password" name="password" class="form">

            <br>

            <label for="type" class="form">Type of celebration:</label>
            <select name="type" id="type" class="form">
                <option value="Select from options">Select from Options</option>
                <option value="Now">Now</option>
                <option value="Later">Later (Not Available)</option>
            </select>
            <br>
            
            <input type="submit" name="login" value="Log In Now" class="form">
        </form>
    </main>
    <footer>
        <h1>Made by Sreyank Bose</h1>
        <h2>&copy; all rights reserved</h2>
    </footer>
</body>
</html>

<?php
    if(isset($_POST["login"])) {

        $username = $_POST["username"] ?? null;
        $password = $_POST["password"] ?? null;
        $type = $_POST["type"];

        if(isset($username) && isset($password) && $type == "Now") {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["type"] = $type;
            header("Location: ../BirthdayPage/Page.php");
            exit;
        }
        header("Location: ../index.php");
        exit;
    }
?>