<?php
  //receive.php
  if( isset($_POST) )
  {
	//var_dump($_POST);  
	//$mail = $_GET['email'];
	//$password = $_REQUEST['pass'];	
	extract($_POST);//create variables
	echo "$names <br>$email<br>$pass <br>$gender";
	$file= fopen("mydata.txt","a+");
	$data ="$names $email $pass $gender\n";
	fputs($file,$data);
	fclose($file);
  }
  else
  {
	echo "No data submitted";
  }
?>



