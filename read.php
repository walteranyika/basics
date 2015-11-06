<?php
 //read.php
 $data = file_get_contents("sample.txt");
 //echo $data;
 //another way line by line
 $file = fopen("sample.txt","r");
 while( !feof($file)  )//while it is not end of file
 {
	 echo fgets($file);	 //reads a single line 
     echo "<br>";
 }
 fclose($file);
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>