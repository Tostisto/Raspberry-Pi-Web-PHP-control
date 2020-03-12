<?php 
	session_start();
	if($_SESSION['username'] != ""){
		require('maine.php'); 
		die;
	}
	require('app/classes/_login.php'); 
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="wrapper">
  <div id="formContent">
    <h2 class="active"> Sign In </h2>

    <form method="post" action="index.php">
      <input type="text" name="username" onfocus="if(this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}" value="Username">
      <input type="password" name="password" onfocus="if(this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" value="Password">
      <input type="submit" name="login" value="Log In">
    </form>

    <?php if($wrong == 1){
							echo "<font color='red'>Incorrect Username/Password</font>";
						}
						?>

  </div>
</div>
  
</body>
</html>
