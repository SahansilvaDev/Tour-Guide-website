<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel</title>
  <link rel="stylesheet" href="./new.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="body1">
<div class="login-box">
  <div class="container">
    <div class="left">
      <div class="header">
        <p class="namekl"></p>
        <h2 class="animation a1">Welcome, Administrator</h2>
        <h4 class="animation a2">If you're interested in registering, kindly complete the provided form</h4>
      </div>
      
      <form class="form" action="./model/insert_admin_reg.php" method="post" enctype="multipart/form-data" id="registration-form">


        <label for="username" class="la">Username:</label>
        <input type="text" class="form-field animation a3" id="username" name="username" required><br>
        
        <!-- <div class="mb-2 mt-2">
          <label for="formFile" class="form-label">Profile Image:</label>
          <input class="form-control form-field animation a3" type="file" name="profile_img" id="formFile" required>
        </div> -->

        <label for="email" class="la">Email:</label>
        <input type="email" class="form-field animation a3" id="email" name="email" required><br>
        
        <label for="password" class="la">Password:</label>
        <input type="password" class="form-field animation a3" id="password" name="password" required><br>

        <button class="animation a6 btn" type="submit"  name="submit">Register Now</button>
      </form>
      
    </div>
    <div class="right"></div>
  </div>
</div>
</body>
</html>
