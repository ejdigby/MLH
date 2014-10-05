<!DOCTYPE html>
<<<<<<< HEAD:public_html/logged_in/pages/Lighting.php
<html> 
	<?php session_start();
       $_SESSION['username']= $_COOKIE["username"];
        $_SESSION['Userid']= $_COOKIE["uid"];	

=======
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>HomeHub - Lighting</title>
	</head>
	<body>
		<header>
			<div id="HomeHub">
				<h1><a href="dashboard.html">HomeHub</a></h1>
			</div>
			<div id="PageTitle">
				<h1>Lighting</h1>
			</div>
			<div id="logout">
			<!-- <a class="logout"href="../logout.php"><span > <?php /* echo $_SESSION['Username']; */?></span></a> -->
			<a class="logout"href="../logout.php"><span >[Username]</span></a>
		</div>
>>>>>>> origin/master:public_html/logged_in/page/Lighting.html

		$pagename = "Lighting";
		$dirnm = 3;

		include '../../assets/head.php';
		 ?>
	<body>
		<?php 
		include '../../assets/header.php';
		?>
		
		<div id="Wrap">
			<div id="Content">
				<h1>Current lights on:</h1>
				<p>[Room, number]</p>
				<br>
				<h1>All lights:</h1>
				<div id="answer">On <input type="radio" name="SingLights" value="yes" class="Radio"></div>
				<div id="answer">Off <input type="radio" name="SingLights"value="no" class="Radio"></div>
				<br>
				<br>
				<h1>Individual lights:</h1>
				<h2>[Room]</h2>
				<h3>[Light number]</h3>
				<br>
				On <input type="radio" name="IndLights"value="On" class="Radio">
				Off <input type="radio" name="IndLights"value="Off" class="Radio">
			</div>
		
		</div>
	</body>
</html>