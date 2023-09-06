<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome to Admin dashboard!</h1>
    <br>
    <?php
            if (isset($_SESSION["id"])) {
            ?>
                
                <button type="submit" value="" class="up" name="userProfile" style="color: green;">Profile</button>

            <?php
            } 

            ?>
</body>
</html>