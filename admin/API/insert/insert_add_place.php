<?php
include '../../login/db_conn.php'; // Update the path as needed

if (isset($_POST['submit'])) {

  $place1 = $_POST['place1'];

  $location_name1 = $_POST['about'];

  $price = $_POST['price'];
  
  $pl_text = mysqli_real_escape_string($conn,$_POST['pl_text']);
  $pl_map = htmlspecialchars($_POST['pl_map']);
  

 

    $target_dir = "../../img/place/"; 

   
    $file1 = $_FILES['file1']['name'];
    $file2 = $_FILES['pl_img1']['name'];
    $file3 = $_FILES['pl_img2']['name'];
    $file4 = $_FILES['pl_img3']['name'];
    $file5 = $_FILES['pl_img4']['name'];
    $file6 = $_FILES['pl_img5']['name'];
    $file7 = $_FILES['pl_img6']['name'];
    $file8 = $_FILES['pl_img7']['name'];
    $file9 = $_FILES['pl_img8']['name'];
    $file10 = $_FILES['pl_img9']['name'];
    $file11 = $_FILES['pl_img10']['name'];



    $tmp_file1 = $_FILES['file1']['tmp_name'];
    $tmp_file2 = $_FILES['pl_img1']['tmp_name'];
    $tmp_file3 = $_FILES['pl_img2']['tmp_name'];
    $tmp_file4 = $_FILES['pl_img3']['tmp_name'];
    $tmp_file5 = $_FILES['pl_img4']['tmp_name'];
    $tmp_file6 = $_FILES['pl_img5']['tmp_name'];
    $tmp_file7 = $_FILES['pl_img6']['tmp_name'];
    $tmp_file8 = $_FILES['pl_img7']['tmp_name'];
    $tmp_file9 = $_FILES['pl_img8']['tmp_name'];
    $tmp_file10 = $_FILES['pl_img9']['tmp_name'];
    $tmp_file11 = $_FILES['pl_img10']['tmp_name'];


    $imageStore1 = rand() . "_" . time() . ".jpeg";
    $imageStore2 = rand() . "_" . time() . ".jpeg";
    $imageStore3 = rand() . "_" . time() . ".jpeg";
    $imageStore4 = rand() . "_" . time() . ".jpeg";
    $imageStore5 = rand() . "_" . time() . ".jpeg";
    
    $imageStore6 = rand() . "_" . time() . ".jpeg";
    $imageStore7 = rand() . "_" . time() . ".jpeg";
    $imageStore8 = rand() . "_" . time() . ".jpeg";
    $imageStore9 = rand() . "_" . time() . ".jpeg";
    $imageStore10 = rand() . "_" . time() . ".jpeg";
    $imageStore11 = rand() . "_" . time() . ".jpeg";


    $target_file1 = $target_dir . $imageStore1;
    $target_file2 = $target_dir . $imageStore2;
    $target_file3 = $target_dir . $imageStore3;
    $target_file4 = $target_dir . $imageStore4;
    $target_file5 = $target_dir . $imageStore5;
    
    $target_file6 = $target_dir . $imageStore6;
    $target_file7 = $target_dir . $imageStore7;
    $target_file8 = $target_dir . $imageStore8;
    $target_file9 = $target_dir . $imageStore9;
    $target_file10 = $target_dir . $imageStore10;
    $target_file11 = $target_dir . $imageStore11;


    if (
        move_uploaded_file($tmp_file1, $target_file1) &&
        move_uploaded_file($tmp_file2, $target_file2) &&
        move_uploaded_file($tmp_file3, $target_file3) &&
        move_uploaded_file($tmp_file4, $target_file4) &&
        move_uploaded_file($tmp_file5, $target_file5) &&

        move_uploaded_file($tmp_file6, $target_file6) &&
        move_uploaded_file($tmp_file7, $target_file7) &&
        move_uploaded_file($tmp_file8, $target_file8) &&
        move_uploaded_file($tmp_file9, $target_file9) &&
        move_uploaded_file($tmp_file10, $target_file10) &&
         move_uploaded_file($tmp_file11, $target_file11) 
    ) {
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO places (place_city, place_hed, place_img, place_price, date, pl_img1, pl_img2, pl_img3, pl_img4, pl_img5, pl_img6, pl_img7, pl_img8, pl_img9, pl_img10, pl_text, pl_map)
    VALUES ('$place1', '$location_name1', '$imageStore1', '$price', '$date', '$imageStore2', '$imageStore3', '$imageStore4', '$imageStore5', '$imageStore6', '$imageStore7', '$imageStore8', '$imageStore9', '$imageStore10', '$imageStore11', '$pl_text', '$pl_map')";

    if ($conn->query($sql) === true) {
      header("Location: ./insert_add_place.php");
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
