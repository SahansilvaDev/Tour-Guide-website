<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="./new.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body2">
<div class="login-box">
  <div class="container">
    <div class="left">
      <div class="header">
        <h2 class="animation a1">Welcome Back</h2>
        <h4 class="animation a2">Log in to your account using your email address and password</h4>
      </div>

      <form class="form" action="login.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <label class="log1">Email Address</label>
        <input class="form-field animation a3" type="text" name="email" placeholder="Email Address"><br>

        <label class="log1">Password</label>
        <input class="form-field animation a4" type="password" name="password" placeholder="Password"><br>

        <button class="animation a6" type="submit">Login</button>

        
      </form>
    </div>
    <div class="right"></div>
  </div>
</div>
</body>
</html>
