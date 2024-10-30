
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['locationId'])) {
    $locationId = $_GET['locationId'];
    // Sanitize the input to prevent SQL injection
    $locationId = $conn->real_escape_string($locationId);

    // Query the database to retrieve data related to the locationId
    $sql = "SELECT * FROM places WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $locationId); // Assuming id is an integer
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Display the data related to the locationId
        echo "Stay ID: " . $row["id"] . "<br>";
        echo "Stay City: " . $row["place_city"] . "<br>";
        echo "place_hed: " . $row["place_hed"] . "<br>";
        // Add more columns as needed
    } else {
        echo "No data found for location ID: $locationId.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "LocationId parameter not set in the URL.";
}
?>
