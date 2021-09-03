<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LoginPage</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <section style="display:inline">
    <div>
  <img style="height: 500px;width: 500px" src="students.png">
   </div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</section>
</body>
</html>