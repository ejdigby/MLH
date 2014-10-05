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
				      <?php
                      // if there hasn't been a redirect page add that to the parth
                     if ($redirectpage == false) {
                      echo '<form action="signinaction.php" method="post">';
                    } else {
                      // if there has been a redirect page add that to the parth
                      echo '<form action="signinaction.php?page=' . $redirectpage . '" method="post">';
                    }?>
                         <div id="inputs">
                         <input type="text" name="username" id+"username" value="<?php echo $_COOKIE['remember_me']; ?>">
                       <input type="password" name="password">
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
		</div>
	</body>
</html>