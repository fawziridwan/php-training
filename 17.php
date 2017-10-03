<?php 

	function minValue(Array $value)	{
		return min(array_diff(array_map('intval', $value), array(0)));
	}

	print_r(minValue(array(-1,0,1,12,-100,1))."\n");

?>