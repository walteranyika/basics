<?php
 //custom.php
   calc_area_circle(14);
   calc_area_circle(1.4);
   calc_area_circle(22);
   calc_area_circle(0.7);
  function calc_area_circle($radius){
	echo pi()*$radius*$radius; 
	echo "<br>";
  }
  
  function vol_cylinder($r,$h)
  {
	$vol = 22/7 * $r * $r * $h;
    return $vol;	
  }
  
  $result = vol_cylinder(14,20);
  echo "<br>Volume is $result<br>";
  
  $result2 = vol_cylinder(2.5,29);
  echo round($result2);
  //calculate area of an equilateral
  //triangle  
  //calculate surface area of a sphere  
  //calculate your age in years
  $myage = calc_age("2005-09-01");
  echo "<br>My age is $myage";
  function calc_age($dob)
  { //epoch time
	$now = date("Y-m-d"); 
    $diff_sec = strtotime($now)-strtotime($dob);	
    $year= 60*60*24*30*12;
	$age = $diff_sec/$year;//45.7899
	$age = floor($age);//45
	return $age;
  }
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

?>

