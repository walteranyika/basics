<?php
  //files.php
  $file = fopen("sample.txt","a+");
  $data ="\nThis is my data";
  fputs($file,$data);
  fclose($file);
  echo "Check In Your Basics folder for the file";

  
  ?>