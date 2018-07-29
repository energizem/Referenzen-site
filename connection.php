
<?php

$servername = "sql208.epizy.com";
$username = "epiz_22468428";
$password = "X1vCVYVrJso";
$dbname = "epiz_22468428_vent"; // ime baze


 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>