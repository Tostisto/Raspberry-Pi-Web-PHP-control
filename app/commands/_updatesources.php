<?php session_start();

if($_SESSION['username'] == ""){
	require('index.php'); 
	die;
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comands</title>
  <link rel="stylesheet" href="../../css/maine.css">

</head>
    <body>
    <div class="wrapper">
        <div class="area">
            <nav class="main-menu">
                <ul>
                    <li>
                        <a href="maine.php">
                            <i> <img src="../../icon/home.svg" class="nav-icon" alt="Home"> </i>
                            <span class="nav-text">
                                Home
                            </span>
                        </a>
                    
                    </li>
                    <li class="has-subnav">
                        <a href="comands.php">
                            <i> <img src="../../icon/control.svg" class="nav-icon" alt="Comands"> </i>
                            <span class="nav-text">
                                Comands
                            </span>
                        </a>
                        
                    </li>
                    <li class="has-subnav">
                        <a href="setting.php">
                        <i> <img src="../../icon/setting.svg" class="nav-icon" alt="Setting"> </i>
                            <span class="nav-text">
                                Setting
                            </span>
                        </a>
                </ul>

                <ul class="logout">
                    <li>
                    <a href="logout.php">
                            <i> <img src="../../icon/logout.svg" alt="Logout" class="nav-icon"> </i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>  
                </ul>
            </nav>
        </div>

        <div class="info">

            <h1>Raspberry Pi control</h1>

            <div class="comands_box">
				<?php
				system('sudo apt-get update -y && sudo apt-get upgrade -y');
				?>

				<h1>Source succesfull updated</h1>
				<a href="../../comands.php">Return To Previous Page</a>
            </div>
        </div>
    </div>
    </body>
</html>
