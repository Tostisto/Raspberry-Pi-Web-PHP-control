<?php
	class systemTemp {
		function getSystemTemp(){
		
		 	$temp = shell_exec("vcgencmd measure_temp");
			echo $temp;
		}
		}
	
?>
