<?php
//others.php
  $to= "test@yahoo.com";
  $message= "Sent by php";
  $subject ="Test Message";
  //mail($to,$subject,$message);
  $password ="abc1234";
  $salt ="$6w527%%*&^&%GFj*&^#?";
  $encrypted= md5($salt.$password.$salt);
  echo $encrypted;
  echo "<br>";
  echo sha1($salt.$password.$salt);
  echo "<br>";
  echo sha1($encrypted);
  echo "<br>";
  echo crypt($salt.$password.$salt);
  //Ashley Madison  
  
  
  
  
  
  
  
  
  
  
  
  
  
?>