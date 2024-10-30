<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: index.php?error=Email Address is required");
        exit();
    } elseif (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                // Get current date and time
                date_default_timezone_set('Asia/Kolkata');
                $currentDateTime = date("Y-m-d H:i:s");

                // Update the database row with the current date and time
                $updateSql = "UPDATE users SET last_login = '$currentDateTime' WHERE id = " . $row['id'];
                mysqli_query($conn, $updateSql);

                header("Location: ../user/index.php");

                exit();
            } else {
                header("Location: index.php?error=Incorrect Email or password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect Email or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
