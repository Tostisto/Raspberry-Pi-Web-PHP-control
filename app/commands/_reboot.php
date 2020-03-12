<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

	system('sudo reboot');
?>
	
<p>Raspberry Pi is now rebooting</p>

