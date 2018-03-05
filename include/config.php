
<?php
    // FTP credentials - host: d3mill.net, user: project@d3mill.net, password: project@d3mill.net  
    
    //Database credentials
    $servername = "d3mill.net";
    $username = "d3mill_project";
    $password = "admin@project";

    //Tables available to connect - users(SSN,Name,Email,DOB) , ... 

    try
    {
	    $pdo = new PDO("mysql:host=$servername;dbname=d3mill_project", $username, $password);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    //echo "Connected successfully". "</br>";
    }

    catch(PDOException $e)
    {
	    echo "Connection to the database failed: " . $e->getMessage();
        exit;
    }
?>

