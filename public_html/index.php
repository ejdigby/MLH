<?php
    if(isset($_COOKIE['username']) AND isset($_COOKIE['uid'])) {
     header('Location: /logged_in/'); }
?>
<!DOCTYPE html>
<html>
		<?php 
		$pagename = "Dashboard";
		$dirnm = 2;

		include 'assets/head.php'; ?>
	<body>
		<?php 
		include 'assets/header.php';
		?>

		<div id="Wrap">
			<div id="Content">
				    <h1><a href="signin.php">Sign In</a></h1>
			</div>
		</div>
	</body>
</html>