<?php
// Replace these with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
