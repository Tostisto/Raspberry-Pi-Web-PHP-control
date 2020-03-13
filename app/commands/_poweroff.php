<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}
	system('sudo poweroff');
?>
	
<p>Shut down</p>
