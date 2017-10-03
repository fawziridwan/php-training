<?php 

	$data_range = range(11,20);

	shuffle($data_range);

	for ($f=0; $f < 10; $f++) { 
		echo $data_range[$f].' ';
	}

	echo "\n"

?>