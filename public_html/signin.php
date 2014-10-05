<?php 
// Check if there are cookies present, if there are go to logged in
if(isset($_COOKIE['username']) AND isset($_COOKIE['uid'])) {
     header('Location: /logged_in/'); 
}
// If there has been an error and the user has been sent back
if (isset($_GET["error"])) { 
    $error  = $_GET["error"]; 
} else { 
    $error = false; 
}
// If a user has been redirected from another page this has the link back to get back to where they were
if (isset($_GET["page"])) { 
    $redirectpage  = $_GET["page"]; 
} else { 
    $redirectpage = false; 
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="A Social Media Gallery">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gllry - Sign In</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      <header id="top">
        <a href="/"><h1 class="title">Gllry</h1></a>
            <a class="logout" href="signup.php">Sign Up</a>
      </header>
      <div id="main">
        <h1 class="welcome">Welcome - Please Log in</h1><br>
                    <?php
                      // if there hasn't been a redirect page add that to the parth
                     if ($redirectpage == false) {
                      echo '<form action="signinaction.php" method="post">';
                    } else {
                      // if there has been a redirect page add that to the parth
                      echo '<form action="signinaction.php?page=' . $redirectpage . '" method="post">';
                    }?>
                         <div id="inputs">
                         <input type="text" name="username" id="username" value="<?php echo $_COOKIE['remember_me']; ?>">
                       <input type="password" name="password" id="password">
                       </div>
                       <div id="labels">
                        Username:
                        Password:
                        </div> 
                        <div id="error">

                        <?php 
                            if ($error == true) {
                              echo '<p class="error"> Sorry Please Try Again</p>';
                            }
                            ?>
                            </div>
                        <div id="siformcontainer">

                         Remember Me  <input type="checkbox" name="remember"<?php if(isset($_COOKIE['remember_me'])) {
                                        echo 'checked="checked"';
                                      }
                                      else {
                                        echo '';
                                      }
                                      ?>><br>
                        
                       <input type="submit" value="Log In">
                       </div>
                    </form>
        </div>
    </body>
</html>