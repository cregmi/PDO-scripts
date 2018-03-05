<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <a href="index.html">Homepage</a>
        <h2>Register new user</h2>
        <form name="register" action="insert-users.php" method="post">
            <label>SSN:<input type="text" name="ssn" required></label>
            </br>
        
            <label>Name:<input type="text" name="name" required></label>
            </br>
        
            <label>Email:<input type="email" name="email" required></label>
            </br>
        
            <label>DOB:<input type="date" name="dob" required></label>
            </br>
            <button type="submit">Register</button>
        </form>
    </body>
</html>
