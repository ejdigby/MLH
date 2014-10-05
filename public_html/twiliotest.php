<?php
echo "hello";

include 'sqlconf.php';
$result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$_COOKIE[username]';");
print_r($result);
print "/n";
  $row = mysqli_fetch_array($result);
  print_r($row);	
  $Phone = $row['Phone']; 
  $Code = $row['NFCCode'];
echo $Phone;
echo $Code;

// Get the PHP helper library from twilio.com/docs/php/install
require_once('/etc/twilio-php/Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACfa37d4feb4c97c558622e49f26256492"; 
$token = "072723e05dab8244abe0c001123d3128"; 
$client = new Services_Twilio($sid, $token);
 
$client->account->messages->sendMessage("+441323702029", $Phone, "this is  a test with your code" . $Code . "please use this for your ring");
echo "Sent";
?>