<?php 

	$colors = array( "Red", "Green", "Blue");
	print_r($colors);

	$lower = array_map('strtolower', $colors);
	print_r($lower);

	$upper = array_map('strtoupper', $colors);
	print_r($upper);	 

?>