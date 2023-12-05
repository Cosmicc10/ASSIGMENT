<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>
    <h1>REGISTER HERE</h1>
    <form action="database.php" method="POST">
        <label>Enter email here:</label>
        <input type="text" name="n1"><br><hr>
        <label>Enter password here:</label>
        <input type="password" name="n2"><br><hr>
        <label>Enter phone number here:</label>
        <input type="number" name="n3"><br><hr>
        <label>Enter your username:</label>
        <input type="text" name="n4"><br><hr>
        <input type="submit" name="ap" value="REGISTER"><br><hr>
 </form>
 <form action="login.php" method="GET">
 <p style="color:blue"><label>GO BACK TO LOGIN PAGE</label>
    <input type="submit" name="ip" value="BACK"></p>
</form>

<?php


?>
</body>
</html>