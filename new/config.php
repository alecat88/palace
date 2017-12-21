<?php


$servername = "localhost";
$username = "vippalac_main";
$password = "Beinspired23v";
$database="vippalac_main";

$mysqli = new mysqli("localhost", $username, $password, $database);
$mysqli->select_db($database) or die( "Unable to select database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>