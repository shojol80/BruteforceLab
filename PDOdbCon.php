<?php
$servername = "localhost";
$username = "kira";
$password = "2522";
$dbname = "bwapp";
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }


?>