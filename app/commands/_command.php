<?php
session_start();

if($_SESSION['username'] == ""){
	die("You are not logged in");
}

echo '<pre>';


$command = $_POST['command'];

$last_line = system('sudo '.$command, $retval);

echo '
</pre>'; ?>
