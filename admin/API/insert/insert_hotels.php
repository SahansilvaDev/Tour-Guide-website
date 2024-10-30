<?php
include '../../login/db_conn.php'; // Update the path as needed

if (isset($_POST['submit'])) {

    $hotel_name1 = $_POST['hotel_name1'];
    $location1 = $_POST['location1'];
    $hotel_description1 = mysqli_real_escape_string($conn, $_POST['hotel_description1']);
    $text1 = mysqli_real_escape_string($conn, $_POST['text1']);


    $hotel_name2 = $_POST['hotel_name2'];
    $location2 = $_POST['location2'];
    $hotel_description2 = mysqli_real_escape_string($conn, $_POST['hotel_description2']);
    $text2 = mysqli_real_escape_string($conn, $_POST['text2']);


    $hotel_name3 = $_POST['hotel_name3'];
    $location3 = $_POST['location3'];
    $hotel_description3 = mysqli_real_escape_string($conn, $_POST['hotel_description3']);
    $text3 = mysqli_real_escape_string($conn, $_POST['text3']);


    $hotel_name4 = $_POST['hotel_name4'];
    $location4 = $_POST['location4'];
    $hotel_description4 = mysqli_real_escape_string($conn, $_POST['hotel_description4']);
    $text4 = mysqli_real_escape_string($conn, $_POST['text4']);


    $hotel_name5 = $_POST['hotel_name5'];
    $location5 = $_POST['location5'];
    $hotel_description5 =mysqli_real_escape_string($conn,  $_POST['hotel_description5']);
    $text5 = mysqli_real_escape_string($conn, $_POST['text5']);

    $hotel_name6 = $_POST['hotel_name6'];
    $location6 = $_POST['location6'];
    $hotel_description6 = mysqli_real_escape_string($conn, $_POST['hotel_description6']);
    $text6 = mysqli_real_escape_string($conn, $_POST['text6']);



    $target_dir = "../../img/hotels/"; // Update the path as needed
    $file1 = $_FILES['file1']['name'];
    $file2 = $_FILES['file2']['name'];
    $file3 = $_FILES['file3']['name'];
    $file4 = $_FILES['file4']['name'];
    $file5 = $_FILES['file5']['name'];
    $file6 = $_FILES['file6']['name'];


    $tmp_file1 = $_FILES['file1']['tmp_name'];
    $tmp_file2 = $_FILES['file2']['tmp_name'];
    $tmp_file3 = $_FILES['file3']['tmp_name'];
    $tmp_file4 = $_FILES['file4']['tmp_name'];
    $tmp_file5 = $_FILES['file5']['tmp_name'];
    $tmp_file6 = $_FILES['file6']['tmp_name'];


    $imageStore1 = rand() . "_" . time() . ".jpeg";
    $imageStore2 = rand() . "_" . time() . ".jpeg";
    $imageStore3 = rand() . "_" . time() . ".jpeg";
    $imageStore4 = rand() . "_" . time() . ".jpeg";
    $imageStore5 = rand() . "_" . time() . ".jpeg";
    $imageStore6 = rand() . "_" . time() . ".jpeg"; // Add this line to generate a unique name for the 6th image


    $target_file1 = $target_dir . $imageStore1;
    $target_file2 = $target_dir . $imageStore2;
    $target_file3 = $target_dir . $imageStore3;
    $target_file4 = $target_dir . $imageStore4;
    $target_file5 = $target_dir . $imageStore5;

    $target_file6 = $target_dir . $imageStore6; // Add this line to specify the target file path for the 6th image

    if (
        move_uploaded_file($tmp_file1, $target_file1) &&
        move_uploaded_file($tmp_file2, $target_file2) &&
        move_uploaded_file($tmp_file3, $target_file3) &&
        move_uploaded_file($tmp_file4, $target_file4) &&
        move_uploaded_file($tmp_file5, $target_file5) &&
        move_uploaded_file($tmp_file6, $target_file6) // Add this line for the 6th image
    ) {
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");

        $uniqueId = "hotel - " . substr(uniqid(), -10);

        // Create the SQL query
        $sql = "INSERT INTO hotels(hotel_id, file1, hotel_name1, location1, hotel_description1, text1, file2, hotel_name2, location2, hotel_description2, text2, file3, hotel_name3, location3, hotel_description3, text3, file4, hotel_name4, location4, hotel_description4, text4, file5, hotel_name5, location5, hotel_description5, text5, file6, hotel_name6, location6, hotel_description6, text6, date)
        VALUES ('$uniqueId', '$imageStore1', '$hotel_name1', '$location1', '$hotel_description1', '$text1', '$imageStore2', '$hotel_name2', '$location2', '$hotel_description2', '$text2', '$imageStore3', '$hotel_name3', '$location3', '$hotel_description3', '$text3', '$imageStore4', '$hotel_name4', '$location4', '$hotel_description4', '$text4', '$imageStore5', '$hotel_name5', '$location5', '$hotel_description5', '$text5', '$imageStore6', '$hotel_name6', '$location6', '$hotel_description6', '$text6', '$date')";

        if ($conn->query($sql) === true) {
            header("Location: ./main_slide_insert.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the files.";
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
