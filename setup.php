<?php
if ($_POST['password']) {
    $output = shell_exec('sudo mkdir /etc/control');
    shell_exec('sudo chown root:root /etc/control');
    shell_exec('sudo chmod 0777 /etc/control');
    shell_exec('sudo touch /etc/control/database.aptmnt');
    shell_exec('sudo chown root:root /etc/control/database.aptmnt');
    shell_exec('sudo chmod 0777 /etc/control/database.aptmnt');
    echo "<pre>$output</pre>";
    $myFile = "/etc/control/database.aptmnt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    $stringData = '{
        "user":		"' . $_POST['username'] .'", 
        "password":	"' . $_POST['password'] .'"
    }';
    fwrite($fh, $stringData); 
    header('location: index.php');
} else {

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Setup</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="wrapper">
  <div id="formContent">
    <h2 class="active"> Create account </h2>

    <?php require('app/includes/_header.php'); ?>

    <form method="post" action="<?php echo $PHP_SELF; ?>">
	    <input type="text" name="username" class="loginForm" onfocus="if(this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}" value="Username">
    	<input type="password" name="password" class="loginForm" onfocus="if(this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}" value="Password"><br/>
	    <input type="submit" value="Create Account" name="submit" class="minimal">
    </form>

    <?php require('app/includes/_footer.php'); ?>
    <?php
}
?>

  </div>
</div>
  
</body>
</html>
