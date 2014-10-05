<?php
  setcookie("username","", time()-3600);
  setcookie("uid","", time()-3600);
  setcookie("username","", time()-3600);
  setcookie("uid","", time()-3600);
  setcookie("remember_me","", time()-3600);
  session_start();
  session_destroy();

	header('Location: /');  
?>