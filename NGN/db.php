<?php
$host = "localhost";
$user = "root";   
$pass = "";  
$dbname = "ims_db";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}
?>
