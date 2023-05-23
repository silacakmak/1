<?php
ob_start();
session_start();
$sunucu = "localhost";
$database = "diffuso";
$username = "root";
$password = "admin123";

// Create connection
$baglan = mysqli_connect($sunucu, $username, $password, $database);

// Check connection
if (!$baglan) {
    die("Connection failed: " . 
mysqli_connect_error());
}


?>