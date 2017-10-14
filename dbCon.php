<?php
$servername = "localhost";
$username = "kira";
$password = "2522";
$dbname = "bwapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>