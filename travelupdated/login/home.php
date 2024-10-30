<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $currentTimestamp = date('Y-m-d H:i:s');
    $userId = $_SESSION['id'];

    // Update last login time in the database
    $sql = "UPDATE users SET last_login = '$currentTimestamp' WHERE user_id = $userId";
    // Execute the SQL query using your chosen MySQL library or extension

    $_SESSION['last_login'] = $currentTimestamp;

    // Retrieve last login time from the database
    $userId = $_SESSION['id'];
    $sql = "SELECT last_login FROM users WHERE user_id = $userId";
    // Execute the SQL query and fetch the result using your chosen MySQL library or extension

    $lastLogin = $_SESSION['last_login'];

    echo "Your last login: " . $lastLogin;
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
} else {
    header("Location: ../user/index.php");
    // header("Location: index.php");

    
    exit();
}
?>
