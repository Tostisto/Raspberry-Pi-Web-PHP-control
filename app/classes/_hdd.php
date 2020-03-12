<?php
	class hddPercentage {
		function freeStorage(){
				    
			    $bytes = disk_free_space("."); 
			    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
			    $base = 1024;
			    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
			    $free =  sprintf('%1.2f' , $bytes / pow($base,$class));
				
				
				
			    $bytes = disk_total_space("."); 
			    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
			    $base = 1024;
			    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
			    $total = sprintf('%1.2f' , $bytes / pow($base,$class));
		    
			
				
				$used = $total - $free;
				$percentage = round($used / $total * 100);
				
				echo "Usage: $percentage % ";
				echo "<br/>Total: <strong>".$total."</strong> GB &middot ";
				echo "Free: <strong>".$free."</strong> GB";
				echo "</div>";
				
				
		}
		}
?>
