<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoppingcart";

// Create connection  - object,paramaters
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connection successful!";
}
?>
