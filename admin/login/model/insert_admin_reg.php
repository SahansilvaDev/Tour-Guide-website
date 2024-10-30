<?php
include './config.php';

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    // $country = $_POST["country"];
    $email = $_POST["email"];
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password securely
    $password = $_POST["password"];

    $target_dir = "../../img/admin_profile_img/";

    $image = $_FILES['profile_img']['name'];
    $tmp_img_name = $_FILES['profile_img']['tmp_name'];
    $imageStore0 = rand() . "_" . time() . ".jpeg";
    $target_file = $target_dir . $imageStore0;

    move_uploaded_file($tmp_img_name, $target_file);

    // Generate a unique ID using a combination of prefix and uniqid()
    $uniqueId = "PREFIX" . substr(uniqid(), -10); // Replace "PREFIX" with a valid prefix

    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");

    // Create the SQL query (fix the insertion of $profile_img)
    $sql = "INSERT INTO admin(username, admin_id, email, password, date, profile_img) VALUES ('$username', '$uniqueId', '$email', '$password', '$date', '$imageStore0')";

    if ($conn->query($sql) === true) {
        header("Location: ./insert_admin_reg.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
            window.location.href = "../index.php"; // Redirect to the registration page
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
                    <a href="../index.php" class="btn btn-primary">Ok</a>
                    
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
