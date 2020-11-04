<?php include('server1.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGNUP</title>	
  	<?php include "links.php";?>
	<link rel="stylesheet" href="css/sign.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!-- sign up form starts -->
	
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
    <div class="input-group">
  	  <label>Organization</label>
  	  <input type="text" name="org">
  	</div>
      
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="Login.php">Sign in</a>
  	</p>
  </form>
	
	
</body>	