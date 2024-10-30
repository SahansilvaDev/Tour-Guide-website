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

// Get the location ID from the URL parameter
if (isset($_GET['location'])) {
    
    $locationId = $_GET['location'];
    // Sanitize the input to prevent SQL injection
    $locationId = $mysqli->real_escape_string($locationId);

    // SQL query to retrieve data based on locationId
    $query = "SELECT h.id, h.hotels_and_resourt_hed, h.hotels_and_resourt_main_img, n.hotel_name
              FROM hotels_and_resourt h
              LEFT JOIN hotels_and_resourt_name n ON h.hotels_and_resourt_hed = n.hotel_name
              WHERE h.id = ?";

    // Prepare the query
    $stmt = $mysqli->prepare($query);

    // Bind the location ID as a parameter
    $stmt->bind_param("s", $locationId);

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
} else {
    echo "Location parameter not set in the URL.";
}
?>


