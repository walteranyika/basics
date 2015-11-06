<?php
 //controls.php
 $weight =110;
 $height =1.8;
 $bmi = $weight/($height*$height);
 //var_dump($bmi>=15 && $bmi<40);
 if($bmi<15)
 {
    echo "You are underweight $bmi";  	 
 }
 else if($bmi>=15 && $bmi<40)
 {
	echo "OK $bmi"; 
 }
 else
 {
   echo "Overweight $bmi";	 
 }

?>