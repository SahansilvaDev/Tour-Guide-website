<?php
include '../../login/db_conn.php'; // Update the path as needed

if (isset($_POST['submit'])) {

  $place1 = $_POST['place1'];

  $location_name1 = $_POST['about'];

  $price = $_POST['price'];
  

 

  $target_dir = "../../img/stay/"; 
  $file1 = $_FILES['file1']['name'];
  $tmp_file1 = $_FILES['file1']['tmp_name'];
  $imageStore1 = rand() . "_" . time() . ".jpeg";
  $target_file1 = $target_dir . $imageStore1;
 
  if (
    move_uploaded_file($tmp_file1, $target_file1) 
   
   
  ) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO  stay (stay_city, stay_hed, stay_img, stay_price, date)
    VALUES ('$place1', '$location_name1', '$imageStore1', '$price', '$date')";

    if ($conn->query($sql) === true) {
      header("Location: ./insert_add_stay.php");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <!-- Add your CSS links here -->

    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

     <script>
        setTimeout(function () {
            window.location.href = "../../index.php"; // Redirect to the registration page
        }, 5000); // 25000 milliseconds (2.5 seconds)
    </script> 


</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registration Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Thank you for registering. Your data has been successfully inserted into the database.</p>
                </div>
                <div class="modal-footer">
                    <a href="../../index.php" class="btn btn-primary">Ok</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add your JavaScript links here -->

    <!-- Add Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Show the modal when the page loads
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('successModal'));
            myModal.show();
        }
    </script>
</body>
</html>
