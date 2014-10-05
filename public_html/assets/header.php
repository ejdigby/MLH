<?php 
include 'sessiondata.php';
 ?>

<header>
<div id="HomeHub">
<h1><a href="/"> HomeHub </a></h1>
</div>
<div id="PageTitle">
<h1>Dashboard </h1>
</div>
<div id="Logout">
<h1>
<a class="logout"href="/assets/logout.php"><span ><?php echo $_SESSION['username'];?></span></a>
</h1></div>
</header>
