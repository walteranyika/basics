<?php
//arrays.php
$marks =array(89,45,87,18,99,56,73,78,89,100,33,75,65,78,54,88,43,25,56,76);     
echo sizeof($marks);//count($marks);
echo "<br>";
echo $marks[2];//third element==87
//var_dump($marks);
$marks[0]=85;//changing an element
$marks[] = 47;//adding an element
//var_dump($marks);
 for($index=0; $index<sizeof($marks);$index++)
 {
	echo $marks[$index]."<br>"; 
 }
 
 //use  while and do while loops 
 //to print out results

 
 
 
 
 
 
 
 
 
 
 
 
 




?>