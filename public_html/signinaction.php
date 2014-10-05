<?php 
include 'sqlconf.php';

if (isset($_GET["page"])) { 
    $redirectpage  = $_GET["page"]; 
} else { 
    $redirectpage = false; 
}

$result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$_POST[username]';");
print_r($result);
print "/n";
  $row = mysqli_fetch_array($result);
  print_r($row);
  
if("" == trim($_POST['username'])){
    header('Location: signin.php?error=true'); 
  echo "uname is blank";
}  elseif ("" == trim($_POST['password'])) {
  header('Location: signin.php?error=true'); 
  echo "pword is blank";
}
else{

    if ($row['Pword'] == $_POST['password']){
      $uid = $row['Uid'];
      $hour = time() + 3600;
      $year = time() + 315360000;
      if($_POST['remember'] == "on") {
        setcookie('remember_me', $_POST['username'], $year);
         setcookie("uid", $uid, $year);
        setcookie("username", $_POST['username'], $year);
        echo "everything is fine";
           if ($redirectpage == false) {
          header('Location: /logged_in/index.php');
          }else {
            header('Location:' . $redirectpage . '.php');
          }  
        }
        else{
        setcookie("uid", $uid);
        setcookie("username", $_POST['username']); 
        echo "everything is fine";
         if ($redirectpage == false) {
          header('Location: /logged_in/index.php');
          }else {
            header('Location:' . $redirectpage . '.php');
          }   
      }
      
    }
    else {
      echo 'Password is Wrong';
      header('Location: signin.php?error=true');   
    }

 }
mysqli_close($con);
// //$hsdpword =  md5($_POST['password']);

// $result = mysqli_query($con,"SELECT * FROM Users");
// while($row = mysqli_fetch_array($result)) {
//   if ("$_POST[username]" == $row['Uname']) {
//    $username = $row['Uname'];
//    if ("$_POST[password]" == $row['Pword']) {
//    $password = $row['Pword'];
    
//     $result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$username';");
//         while($row = mysqli_fetch_array($result)) {
//         $uid = $row['Uid'];
//     }
//     $hour = time() + 3600;
//     $year = time() + 315360000;
//     if($_POST['remember']) {
//       setcookie('remember_me', $_POST['username'], $year);
//          setcookie("uid", $uid, $year);
//       setcookie("username", $username, $year);
//       }
//       else{
//       setcookie("uid", $uid);
//       setcookie("username", $username); }
//     header('Location: /logged_in/index.php');    
//  }
//  else {
//    echo"Paswords are incorrect";
//    }
//   }
//   else {
//    echo"User Name isnt correct";
//   }
// }
// mysqli_close($con);?>














<?php include '../sqlconf.php';
// //$hsdpword =  md5($_POST['password']);

// $result = mysqli_query($con,"SELECT * FROM Users");
// while($row = mysqli_fetch_array($result)) {
//   if ("$_POST[username]" == $row['Uname']) {
//    $username = $row['Uname'];
//    if ("$_POST[password]" == $row['Pword']) {
//    $password = $row['Pword'];
    
//     $result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$username';");
//         while($row = mysqli_fetch_array($result)) {
//         $uid = $row['Uid'];
//     }
//     $hour = time() + 3600;
//     $year = time() + 315360000;
//     if($_POST['remember']) {
//       setcookie('remember_me', $_POST['username'], $year);
//          setcookie("uid", $uid, $year);
//       setcookie("username", $username, $year);
//       }
//       else{
//       setcookie("uid", $uid);
//       setcookie("username", $username); }
//     header('Location: /logged_in/index.php');    
//  }
//  else {
//    echo"Paswords are incorrect";
//    }
//   }
//   else {
//    echo"User Name isnt correct";
//   }
// }
// mysqli_close($con);?>