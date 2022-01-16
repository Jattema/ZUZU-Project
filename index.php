<?php
include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method="POST" action="orderpage.php">
        Firstname:<br>
        <input type="text" name="fname"><br>
        Lastname:<br>
        <input type="text" name="lname"><br>
        Address:<br>
        <input type="text" name="address"><br>
        City:<br>
        <input type="password" name="city"><br>
        Zipcode:<br>
        <input type="password" name="zipcode"><br>
</form>
</body>
</html>