<?php
$servername = "localhost"; // Change to your server address if using a remote server
$username = "root"; // Your MySQL username
$password = "karthik@1234"; // Your MySQL password
$dbname = "unidb"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'db_connect.php';

if ($conn) {
    echo "Database connected successfully.";
} else {
    echo "Failed to connect to database.";
}
?>
