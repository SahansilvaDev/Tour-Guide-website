<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        .success-message {
            text-align: center;
            padding: 50px;
            background-color: #f0f0f0;
            
        }
    </style>
    <script>
        setTimeout(function () {
            window.location.href = "../index.php"; // Redirect to the registration page
        }, 3000); // 25000 milliseconds (2.5 seconds)
    </script>
</head>
<body>
    <div class="success-message">
        <h2>Data inserted successfully</h2>
        <p>Thank you for registering. Your data has been successfully inserted into the database.</p>
        <p>You will be redirected to the registration page in a few seconds...</p>
        <!-- <a href="../index.php">Go back to login </a> -->
    </div>
</body>
</html>
