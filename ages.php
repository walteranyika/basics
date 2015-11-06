<?php
$data= array();
$ages = array();//creating array
for($x=1; $x<=6000; $x++)
{
  $value = rand(1,120);	//generate randomly
  $ages[] = $value;//add to the array
}
//var_dump($ages);
$y =0;
do
{
	   $value = $ages[$y]; 
		if($value%2!=0)
		{
		  echo "$value<br>"	;
		} 
	   $y++;	
}
while($y<200);

$file = fopen("ages.txt","a+");
$z=0;
while($z<count($ages))
{
	//save
		$value = $ages[$z]; 
		if($value%2!=0)
		{
		  fputs($file,"$value\n");
		}
    $z++;		
}
fclose($file);





















?>