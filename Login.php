<?php include('server1.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Login</title>
	<?php include "links.php";?>
	
	<link rel="stylesheet" href="adminStyle.css">	
</head>
<body>

  
<div class="container">
 
	<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/ad.jpg" id="icon" alt="User Icon" / style="height: 100px; width: 100px">
    </div>

    <!-- Login Form -->
	  
    <form method="post" action="Login.php">
      <?php include('errors.php'); ?>
		<input type="text" id="login" class="fadeIn second" name="username" placeholder="userid">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login_user">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      Not yet a member? <a href="signup.php">Sign up</a>
    </div>

  </div>
</div>
</div>

</body>
</html>