<?php 

$original = array(1,2,3,4,5);

echo 'original array : '."\n";

foreach ($original as $f) {
	echo "$f";
}
$inserted = '$';

array_splice($original, 3, 0, $inserted);

echo " \n After inserting '$' the array is : "."\n";

foreach ($original as $f) {
	echo "$f";
}
echo "\n"
?>