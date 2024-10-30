<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create a database connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Define the header value to filter on
$headerValue = "Marino Beach Colombo"; // Replace with the actual header value you want to filter by

// SQL query with a LEFT JOIN and a WHERE clause
$query = "SELECT h.id, h.hotels_and_resourt_hed, h.hotels_and_resourt_main_img, n.hotel_name
          FROM hotels_and_resourt h
          LEFT JOIN hotels_and_resourt_name n ON h.hotels_and_resourt_hed = n.hotel_name
          WHERE h.hotels_and_resourt_hed = ?";

// Prepare the query
$stmt = $mysqli->prepare($query);

// Bind the header value as a parameter
$stmt->bind_param("s", $headerValue);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $mysqli->error);
}

// Fetch and display the data
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . "<br>";
    echo "Header: " . $row['hotels_and_resourt_hed'] . "<br>";
    echo "Main Image: " . $row['hotels_and_resourt_main_img'] . "<br>";
    echo "Hotel Name: " . $row['hotel_name'] . "<br>";
    echo "<hr>";
}

// Close the statement and the database connection
$stmt->close();
$mysqli->close();
?>
