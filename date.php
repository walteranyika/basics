<?php
//date.php
$today = date("d-m-Y");
echo "$today<br>";
$dob= "1990-08-15";
$current=date("Y-m-d");

$time1=strtotime($dob);
$time2=strtotime($current);
$num_seconds = $time2 - $time1;
$days = $num_seconds/(24 * 60* 60);
//exact years,remaining months, rem days
$day=24 * 60* 60;
$month=$day*30;
$year=$month*12;
$rem_after_years= $num_seconds % $year;
$y= ($num_seconds-$rem_after_years)/$year;
echo "<br>Exact Years is $y";
echo "<br>Number of days is $days";
echo "<br>T1 $time1 <br>T2 $time2";
?>


