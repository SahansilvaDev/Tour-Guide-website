<?php
// Check if the "locationId" query parameter exists in the URL
if (isset($_GET['locationId'])) {
    // Create a database connection (replace with your credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $locationId = $_GET['locationId'];
    
    // Sanitize the input to prevent SQL injection
    $locationId = $conn->real_escape_string($locationId);

    // Query the database to retrieve data related to the locationId
    $sql = "SELECT * FROM hotels_and_resourt WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $locationId); // Assuming id is an integer
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output data of the first row (assuming you only expect one result)
            $row = $result->fetch_assoc();
            
            // Output the data you want to display here, e.g., echoing specific fields
            echo "Hotel Name: " . $row['hotels_and_resourt_city'] . "<br>";
            echo "Location: " . $row['hotels_and_resourt_hed'] . "<br>";
            // Add more fields as needed
            
            $stmt->close();
        } else {
            echo "No data found for location ID $locationId";
        }
    } else {
        echo "Error in preparing the statement: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Location ID not provided in the URL";
}
?>
