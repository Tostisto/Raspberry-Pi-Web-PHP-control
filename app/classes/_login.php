<?php session_start();

if(isset($_POST['login'])){

	$handle = file_get_contents("/etc/control/database.aptmnt");
	$db = json_decode($handle);
	$username = $db->{'user'};
	$password = $db->{'password'};
	
	if($_POST['username'] == $username && $_POST['password'] == $password){
		
		$_SESSION['username'] = $username; ?>
		
		<script type="text/javascript">
		<!--
		window.location = "maine.php"
		//-->
		</script>
		
		<?php
		
	}else{
		
		$wrong = 1;
		
	}
	
}

?>