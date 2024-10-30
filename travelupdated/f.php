<?php
    // Check if the "id" query parameter exists in the URL
    if (isset($_GET["id"])) {
        // Get the ID from the URL
        $id = $_GET["id"];

        // Create a database connection (replace with your credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "travel";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to fetch details from the hotels_and_resourt table based on the ID
        $sql = "SELECT * FROM hotels_and_resourt WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("i", $id); // "i" indicates an integer parameter
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo $row['hotels_and_resourt_hed'];
            } else {
                echo "No data found for ID $id";
            }
            
            $stmt->close();
        } else {
            echo "Error in preparing the statement: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "ID not provided in the URL";
    }
?>
