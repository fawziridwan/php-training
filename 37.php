<?php

function hitunglarik($array_saya, $cocok) 
{ 
    $count = 0; 
    
    foreach ($array_saya as $key => $value) 
    { 
        if ($value == $cocok) 
        { 
            $count++; 
        } 
    } 
    
    return $count; 
} 

$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");

echo "\n"."Red color appears ".hitunglarik($colors, "Red"). " time(s)."."\n"; 

?>