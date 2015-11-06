<?php
 //loops.php
 //for ,while, do while, foreach
 //start, end, increment
 /*
   for($count=1; $count<=100; $count++)
   {
	 //echo "$count Walter<br>"; 
      $result = $count * $count;
      echo "$count x $count = $result <br>";	  
   }
 */
 /* for($x=0; $x<=100; $x+=5)
  {
	$result = $x * $x;
    echo "$x x $x = $result<br>";	
  }
 */
 
 /* for($x=0; $x<=100; $x++)
  {
	if($x%3 == 0)
	{
	 $result = $x * $x;
	 echo "$x x $x = $result<br>";
	}	
  }*/
 /* for($count =50; $count>=0; $count--)
  {
	if($count%2 == 1 )
	{
		echo "$count<br>";
	} 	  
  }*/
  //A loop that prints out all 
  //prime numbers between 10 and 100
/*   for($count =10; $count<=100; $count++)
  {
	if($count%2!=0 && $count%3!=0
     	&& $count%5!=0 && $count%7!=0)
	{
		echo "$count<br>";
	} 	  
  }*/
  
  //A loop to add all numbers 
  //between 0 and 20
  //show the result
 $sum=0;
 for($count=0; $count<=20; $count++)
 {
	$sum +=$count;	//$sum=$sum+$count 
 }  
 echo $sum;
 
 //A loop that prints out the 
// following pattern
// 1 ,3 ,9 ,27 ,81 ........ 
// up to a total of ten integers
 /*
 $start=1; 
 for($z=1; $z<=10; $z++)
 {    
     echo "$start , ";
     $start = $start * 3; 
 }
*/
$j=1;
while($j<=10)
{
  echo "$j Uganda<br>";
  $j++;  
}
//do while loop
$k=1;
do
{
  echo "$k Kenya<br>";
  $k++; 	
}while($k<=10);
























 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
 //write a loop that prints out
 //odd numbers from 50 to 0  
 
 
 
 
 
 
 
 

?>