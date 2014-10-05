<!DOCTYPE html>
<html>
		<?php

 session_start();
       $_SESSION['username']= $_COOKIE["username"];
        $_SESSION['Userid']= $_COOKIE["uid"];	


		$pagename = "Dashboard";
		$dirnm = 2;

		include '../assets/head.php';
		include '../assets/sessiondata.php';
		 ?>
	<body>
		<?php 
		include '../assets/header.php';
		?>

		<div id="Wrap">
			<div id="Content">
				<div id="Row">
					<div id="Box">
						<a href="pages/Hive.php">
							<img src="images/Hive.png" />
							<p>Heating</p>
						</a>
					</div>
					<div id="Box">
						<a href="pages/Lighting.php">
							<img src="images/Bulb.png" />
							<p>Lighting</p>
						</a>
					</div>
					<div id="Box">
						<a href="">
							<img src="images/Alarm.png" />
							<p>Alarms</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>