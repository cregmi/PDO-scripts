
<?php
    //Database credentials
    $servername = "host";
    $username = "user";
    $password = "password";

    //Tables available to connect - users(SSN,Name,Email,DOB) , ... 

    try
    {
	    $pdo = new PDO("mysql:host=$servername;dbname=database_name", $username, $password);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully". "</br>";
    }

    catch(PDOException $e)
    {
	    echo "Connection to the database failed: " . $e->getMessage();
        exit;
    }
?>

