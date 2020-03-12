<?php
	class systemos {
		function getSystemOs(){
		
		 	$os = shell_exec("cat /etc/os-release");
			echo $os;
		}
		}
	
?>
