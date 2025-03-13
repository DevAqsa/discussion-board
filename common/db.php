<?php

$host = "localhost";
$username = "root";
$password = "root";
$dbname = "discuss";


// conecting to database with the help of my sqli 

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to database";
?>