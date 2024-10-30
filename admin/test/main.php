<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stay_id = null; // Initialize $stay_id
$place_id = null; // Initialize $place_id

// Get the city name from the URL parameter
if (isset($_GET['cityName'])) {
    $cityName = $_GET['cityName'];
    // Sanitize the input to prevent SQL injection
    $cityName = $conn->real_escape_string($cityName);

    // SQL query to select rows where stay_city is the sanitized city name
    $sql = "SELECT * FROM hotels_and_resourt WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cityName);
    $stmt->execute();
    $stayResult = $stmt->get_result();

    if ($stayResult->num_rows > 0) {
        // Output data of each row
        while ($row = $stayResult->fetch_assoc()) {
            $stay_id = $row["id"];
            echo "Stay City: " . htmlspecialchars($row["hotels_and_resourt_hed"]) . "<br>";
            // Add more columns as needed
            echo "<br>";
        }
    } else {
        echo "No results found for Stay in $cityName.";
    }

   
?>

<a href="#" class="locationLink" data-location="<?php echo $stay_id; ?>" >See More (Stay)</a><br>



<script>
var locationLinks = document.querySelectorAll(".locationLink");


locationLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
        event.preventDefault(); 

     
        var locationId = this.getAttribute("data-location");

        
        // var url = "location_post.php?location=" + encodeURIComponent(locationName);
					// 	var url1 = "../location_post.php?location=" + encodeURIComponent(locationName);
        
           var url = "search.php?locationId=" + encodeURIComponent(locationId);
         

         
         window.location.href = url;
        
    });
});
</script>
<?php
    $conn->close();
} else {
    echo "CityName parameter not set in the URL.";
}
?>