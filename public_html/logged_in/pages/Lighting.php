<!DOCTYPE html>
<html> 
	<?php session_start();
       $_SESSION['username']= $_COOKIE["username"];
        $_SESSION['Userid']= $_COOKIE["uid"];	


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