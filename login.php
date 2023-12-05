<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="logindbase.php" method="POST">
        <label>Enter email here:</label>
        <input type="email" name="l1" required><br><hr>
        <label>Enter password here:</label>
        <input type="password" name="l2" required><br><hr>
        <input type="submit" name="ap" value="LOGIN">
    </form>
    <form action="register.php" method="POST">
    <p style="color:red"><label>NOT A USER:</label>
    <input type="submit" name="mn" value="REGISTER"></p>
    </form>

<?php


?>
</body>
</html>