<?php
//functions.php
$mpesa="JIA029L0YO Confirmed. You have received 
       Ksh500000.00 from Tom Atuom 0723123456 on 
		10/10/2010 at 4.33 PM New M-PESA balance is 
		Ksh13,900.00. Pay Tom via M-PESA";
		
$pos_on = strpos($mpesa," on ")+3;
$pos_at =strpos($mpesa," at ");
$len = $pos_at - $pos_on ;
$date = substr($mpesa, $pos_on, $len);		
echo "$date<br><br><br>";	

		
$pos_ksh = strpos($mpesa,"Ksh")+3;
$pos_from =strpos($mpesa,"from");
$len = $pos_from - $pos_ksh ;
$amount = substr($mpesa, $pos_ksh, $len);		
echo "$amount<br><br><br>";		
		
		
		
		
$upper = strtoupper($mpesa);//calling a function
echo $upper;
$lower =strtolower($mpesa);//data==parameter
echo "<br> $lower";
$replaced = str_replace("Tom","Mary",$mpesa);
echo "<br>$replaced";
$replaced = str_ireplace("tom","Mary",$mpesa);

$size = strlen($mpesa);
echo "<br>The count is $size";

$pos_tom= strpos($mpesa,"Tom");//search from front
$pos= stripos($mpesa,"tom");//case insensitive

$pos2 =strrpos($mpesa,"Tom");//search from behind

echo "<br> Position of Tom is $pos_tom";
echo "<br> Position of Tom is $pos";
echo "<br> Position of Tom2 is $pos2";





















?>