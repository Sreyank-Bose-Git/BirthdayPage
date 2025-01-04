<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celebrations Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="audio">
        <audio src="../audio/birthdayPage.mp3" controls></audio>
    </div>
    <br>
    <div id="header">
        <h1><pre>Celebrations Page
Made By Sreyank Bose</pre></h1>
    </div>
    <br>
    <div id="birthday">
        <img src="../images/image.jpg" alt="Image of Birthday">
    </div>
</body>
</html>

<?php
    $username = $_SESSION["username"];
    echo"<br><br><p style=\"font-size: 50px;text-align: center; background-color: tomato; width: fit-content; margin: auto; border: 5px solid blue; font-family: monospace; padding-left: 80px; padding-right: 80px;\">Happy Birthday!</p>";
    echo"<p style=\"font-size: 90px;text-align: center; background-color: aqua; width: fit-content; margin: auto; border: 5px solid crimson;\">$username</p>";
?>