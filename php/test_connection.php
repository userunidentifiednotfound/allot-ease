<?php
// Include the database connection file
include 'db_connect.php'; // Make sure this file contains your connection setup

// Check if the connection was successful
if ($conn) {
    echo "Database connected successfully.";
} else {
    echo "Failed to connect to database.";
}
?>
