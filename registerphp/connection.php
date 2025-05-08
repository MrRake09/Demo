<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "simpledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
