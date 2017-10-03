<?php 

	function ascValue()	
	{
		$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

		asort($data);

		foreach ($data as $value => $key) {
			echo "ascending order sort by $value \n";
		}		
	}

	ascValue();
	echo "\n";

	function ascKey()	
	{
		$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

		asort($data);

		foreach ($data as $value => $key) {
			echo "ascending order sort by $key \n";
		}		
	}

	ascKey();
	echo "\n";
	
	function descValue()	
	{
		$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

		arsort($data);

		foreach ($data as $value => $key) {
			echo "ascending order sort by $value \n";
		}		
	}

	descValue();
	echo "\n";

	function descKey()	
	{
		$data = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

		krsort($data);

		foreach ($data as $value => $key) {
			echo "ascending order sort by $key \n";
		}		
	}

	descKey();


?>