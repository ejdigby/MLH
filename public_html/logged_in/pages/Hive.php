<!DOCTYPE html>
<html> 
	<?php session_start();
       $_SESSION['username']= $_COOKIE["username"];
        $_SESSION['Userid']= $_COOKIE["uid"];	


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