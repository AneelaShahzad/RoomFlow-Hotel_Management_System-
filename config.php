<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hotel_management_system"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
