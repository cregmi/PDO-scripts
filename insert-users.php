<?php   
   
$form = $_POST;
$ssn = $form['ssn'];
$name = $form['name'];                    
$email = $form['email'];                   
$dob = $form['dob'];  

require_once 'include/config.php'; 

$sql = "INSERT INTO users(SSN, Name, Email, DOB) VALUES (?,?,?,?)";
$data = $pdo->prepare($sql);
$result = $data->execute([$ssn,$name, $email, $dob]);

if($result) 
{
    echo "Registered in database";
}

else 
{
    echo 'Error occured, contact supporrt';
}  
echo '</br><a href="index.html">Homepage</a>';
 
?>