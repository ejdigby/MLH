<!DOCTYPE html>
<<<<<<< HEAD:public_html/logged_in/pages/Hive.php
<html> 
	<?php session_start();
       $_SESSION['username']= $_COOKIE["username"];
        $_SESSION['Userid']= $_COOKIE["uid"];	

=======
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title>HomeHub - Hive Heating</title>
	</head>
	<body>
		<header>
			<div id="HomeHub">
				<h1><a href="dashboard.html">HomeHub</a></h1>
			</div>
			<div id="PageTitle">
				<h1>Heating</h1>
			</div>
			<div id="logout">
			<!-- <a class="logout"href="../logout.php"><span > <?php /* echo $_SESSION['Username']; */?></span></a> -->
			<a class="logout"href="../logout.php"><span >[Username]</span></a>
		</div>
>>>>>>> origin/master:public_html/logged_in/page/Hive.html

		$pagename = "Heating";
		$dirnm = 3;

		include '../../assets/head.php';
		 ?>
	<body>
		<?php 
		include '../../assets/header.php';
		?>
		<div id="Wrap">
			<div id="Content">
				<h1>Current temperature:</h1>
				<p>[]</p>
				<br>
				<h1>Heating:</h1>
				<div id="answer">
					On <input type="radio" name="yes/no" value="yes" class="Radio">
				</div>
				<div id="answer">Off <input type="radio" name="yes/no"value="no" class="Radio"></div>
				<br>
				<br>
				<h1>Adjust temperature:</h1>
					<input type="button" name="-1" class="button" value="-"><p class="button">[]</p><input type="button" name="+1" class="button" value="+">
			</div>
		</div>
	</body>
</html>