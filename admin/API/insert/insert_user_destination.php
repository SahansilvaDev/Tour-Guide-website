<?php
include '../../login/db_conn.php'; // Update the path as needed

if (isset($_POST['submit'])) {

    $place1 = $_POST['place1'];
    
    $people1 = $_POST['people1'];

    $place2 = $_POST['place2'];
    
    $people2 = $_POST['people2'];

    $place3 = $_POST['place3'];
    
    $people3 = $_POST['people3'];

    $place4 = $_POST['place4'];
    
    $people4 = $_POST['people4'];

    $place5 = $_POST['place5'];
    
    $people5 = $_POST['people5'];

    $place6 = $_POST['place6'];
   
    $people6 = $_POST['people6'];


  $uniqueId = "u_destination" . substr(uniqid(), -10);

    $target_dir = "../../img/user_destination/"; // Update the path as needed
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
    $imageStore6 = rand() . "_" . time() . ".jpeg";


    $target_file1 = $target_dir . $imageStore1;
    $target_file2 = $target_dir . $imageStore2;
    $target_file3 = $target_dir . $imageStore3;
    $target_file4 = $target_dir . $imageStore4;
    $target_file5 = $target_dir . $imageStore5;
    $target_file6 = $target_dir . $imageStore6;


    if (
        move_uploaded_file($tmp_file1, $target_file1) &&
        move_uploaded_file($tmp_file2, $target_file2) &&
        move_uploaded_file($tmp_file3, $target_file3) &&
        move_uploaded_file($tmp_file4, $target_file4) &&
        move_uploaded_file($tmp_file5, $target_file5) &&
        move_uploaded_file($tmp_file6, $target_file6)
    ) {
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d H:i:s");

        // Create the SQL query
        $sql = "INSERT INTO user_destination(destination_id ,file1, place1, people1, file2, place2, people2, file3, place3, people3, file4, place4, people4, file5, place5, people5, file6,  place6, people6, date)
        VALUES ('$uniqueId', '$imageStore1', '$place1', '$people1', '$imageStore2', '$place2', '$people2', '$imageStore3', '$place3', '$people3', '$imageStore4', '$place4', '$people4', '$imageStore5', '$place5', '$people5', '$imageStore6', '$place6', '$people6', '$date')";

        if ($conn->query($sql) === true) {
            header("Location: ./insert_user_destination.php");
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
