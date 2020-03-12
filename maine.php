<?php session_start();

if($_SESSION['username'] == ""){
	require('index.php'); 
	die;
}

?>


<?php 	
	require('app/classes/_hdd.php'); 
    require('app/classes/_os.php'); 
    require('app/classes/_temp.php'); 
	require('app/classes/_uptime.php'); 
    require('app/includes/_header.php'); 
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maine</title>
  <link rel="stylesheet" href="css/maine.css">

</head>
    <body>
  
        <div class="area">
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="maine.php">
                            <i> <img src="icon/home.svg" class="nav-icon" alt="Home"> </i>
                            <span class="nav-text">
                                Home
                            </span>
                        </a>
                    
                    </li>
                    <li class="has-subnav">
                        <a href="comands.php">
                            <i> <img src="icon/control.svg" class="nav-icon" alt="Comands"> </i>
                            <span class="nav-text">
                                Comands
                            </span>
                        </a>
                        
                    </li>
                    <li class="has-subnav">
                        <a href="setting.php">
                        <i> <img src="icon/setting.svg" class="nav-icon" alt="Setting"> </i>
                            <span class="nav-text">
                                Setting
                            </span>
                        </a>
                </ul>

                <ul class="logout">
                    <li>
                    <a href="logout.php">
                            <i> <img src="icon/logout.svg" alt="Logout" class="nav-icon"> </i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>  
                </ul>
            </nav>
        </div>

        <div class="info">
            
                <h1>Raspberry Pi info</h1>

            <div class="info_box">
            <?php $uptime = new systemUptime; $getSystemUptime = $uptime->getSystemUptime();?>	
            </div>          

                <br><br>


                <div class="info_box">
                <?php 
                    $hostname = shell_exec("hostname");
                    echo "Hostname: $hostname";
                    echo "<br>";
                    $ip = shell_exec("hostname -i");
                    echo "IP: $ip";
                ?>
                 </div>


                 <br><br>


            <div class="info_box">

                <?php $hdd = new hddPercentage; $storagepercentage = $hdd->freeStorage();?>
            
            </div>

                <br><br>
                

                <div class="info_box">
                <?php 
                    $temp = shell_exec("sudo vcgencmd measure_temp");
                    echo "CPU $temp";
                    echo "<br>";
                    $clock = shell_exec("sudo cat /sys/devices/system/cpu/cpu0/cpufreq/cpuinfo_max_freq");
                    $clock = $clock / 1000000;
                    echo "CPU clock speed: <strong>$clock GHz</strong>";
                ?>
                 </div>

                <br><br>
               

                <div class="info_box">
                <?php 
                    $os = shell_exec("uname -a");
                    echo $os;
                    echo"<br>";
                    $oss = shell_exec("cat /etc/issue");
                    echo $oss;
                ?>
                 </div>

        </div>

    </body>
</html>
