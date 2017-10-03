<?php
	$temperatur_bulanan = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

	$kalkulasi_array = explode(',', $temperatur_bulanan);

	$total_temperatur = 0;

	$kalkulasi_array_length = count($kalkulasi_array);

	foreach($kalkulasi_array as $temp)	{
	 $total_temperatur += $temp;
	}
	 $avg_high_temp = $total_temperatur/$kalkulasi_array_length;
	 echo "Average Temperature is : ".$avg_high_temp."
	"; 
	sort($kalkulasi_array);
	echo " List of seven lowest temperatures :";
	for ($i=0; $i< 5; $i++)
	{ 
	echo $kalkulasi_array[$i].", ";
	}
	echo "List of seven highest temperatures :";
	for ($i=($kalkulasi_array_length-5); $i< ($kalkulasi_array_length); $i++)
	{
	echo $kalkulasi_array[$i].", ";
	}
?>