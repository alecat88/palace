<?php


$servername = "localhost";
$username = "vippalac_main";
$password = "Beinspired23v";
$database="vippalac_main";
try {
   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
}
catch(PDOException $e)
{
   echo "Connection failed: " . $e->getMessage();
}
?> 