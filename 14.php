<?php 
	
	$data_larik = array("abcd","abc","de","hjjj","g","wer");

	$larik_baru = array_map('strlen', $data_larik);

	echo "The shortest array length is ". min($larik_baru). "\n". "The longest array length is ". max($larik_baru);


?>