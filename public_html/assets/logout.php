<?php
  setcookie("username","", time(-3600));
  setcookie("uid","", time(-3600));
  $_SESSION['username']= "";
  $_SESSION['Userid']="";

        echo "DONE!";

	header('Location: http://mlh.ejdigby.com');  
   ?>