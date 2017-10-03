<?php 

	function change_value_case($input, $upperCase)	{

	$case = $upperCase;

	$narray = array();

	if (!is_array($input))	{
		return $narray;
	}
	foreach ($input as $key => $value)	{
		if (is_array($value))	{
			$narray[$key] = change_value_case($value, $case);
			 continue;
		}
		$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
	}
	return $narray;
	}
	
	$Warna = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	
	echo 'Actual array ';
	
	print_r($Warna);
	
	echo 'Values are in lower case.';
	
	$warna = change_value_case($Warna,CASE_LOWER);
	
	print_r($warna);
	
	echo 'Values are in upper case.';
	
	$warna = change_value_case($Warna,CASE_UPPER);
	
	print_r($warna);

?>