<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Travel</title>
  <link rel="stylesheet" href="./new.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body class="body1">
<!-- partial:index.partial.html -->
<div class="login-box">
  <!--h2>Login</h2-->
  
  <div class="container">
    <div class="left">
      <div class="header">
        <p class="namekl"></p>
        <h2 class="animation a1">Welcome Back</h2>
        <h4 class="animation a2">If you're interested in registering, kindly complete the provided form</h4>
      </div>
      
      <!--form class="form" action="login.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input class="form-field animation a3" type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input class="form-field animation a4" type="password" name="password" placeholder="Password"><br>

     	<button class="animation a6" type="submit">Login</button>
     </form-->
     
     
     <form class="form" action="./model/insert_reg.php" method="post" id="registration-form">
         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	

        <label for="username" class="la">Username:</label>
        <input type="text" class="form-field animation a3" id="username" name="username" required><br>
        
        
        <label for="country" class="la">Country:</label>
        <input type="text" class="form-field animation a3" id="Country" name="Country" required><br>
        

        <label for="email" class="la">Email:</label>
        <input type="email" class="form-field animation a3" id="email" name="email" required><br>
        
        
        <label for="password" class="la">Password:</label>
        <input type="password" class="form-field animation a3" id="password" name="password" required><br>
        
        

        <button class="animation a6 btn" type="submit">Register Now ...</button>
    </form>
      </form>
     
      
    </div>
    <div class="right"></div>
  </div>
  




</div>
<!-- partial -->
  
</body>
</html>
