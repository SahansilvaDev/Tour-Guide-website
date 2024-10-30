<?php
include '../../login/db_conn.php'; // Update the path as needed

if (isset($_POST['submit'])) {
    $blog_title1 = $_POST['blog_title1'];
    $discription1 = $_POST['discription1'];

    $target_dir = "../../img/user_blog/"; // Update the path as needed
    $file1 = $_FILES['file1']['name'];
    $tmp_file1 = $_FILES['file1']['tmp_name'];
    $imageStore1 = rand() . "_" . time() . ".jpeg";
    $target_file1 = $target_dir . $imageStore1;

    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d H:i:s");

    // Move the uploaded file to the target directory
    if (move_uploaded_file($tmp_file1, $target_file1)) {
        // Create the SQL query
        $sql = "INSERT INTO user_blog (file1, blog_title1, discription1, date) VALUES ('$imageStore1', '$blog_title1', '$discription1', '$date')";

        if ($conn->query($sql) === true) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the file.";
    }
} else {
    echo "Form submission not detected.";
}

// Close the database connection
$conn->close();
