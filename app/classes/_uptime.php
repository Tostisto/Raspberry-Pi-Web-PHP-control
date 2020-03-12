<?php
	class systemUptime {
		function getSystemUptime(){
		
		 	$uptime = shell_exec("cat /proc/uptime");
			$uptime = explode(" ", $uptime);
			$uptime = gmdate("H:i", $uptime[0]);
			echo $uptime;
		}
		}
	
?>
