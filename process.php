<?php
$file = fopen("data.txt","r"); 
while(!feof($file))
{
	$line= fgets($file);//reads a line
	if(!empty($line))
	{//USSD
		$data_array= explode("#",$line);
		$names=$data_array[0];
		$email=$data_array[1];
		$age =$data_array[2];
		echo "<tr>
					<td>$names</td>
					<td>$email</td>
					<td>$age</td>
			  </tr>";	
	}
	
}
fclose($file);




?>