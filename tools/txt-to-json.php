<?php
$contents = file_get_contents('example-text.txt');

$contents_array = array_map('trim',explode('====',$contents));
$outputarray = array();
foreach ($contents_array as $value) {
	$temp = array_map('trim',explode(PHP_EOL,$value));

	//remove empty lines
	$empty_elements = array_keys($temp,"");
	foreach ($empty_elements as $e){
		unset($temp[$e]);
	}

	//remove key element
	$key = array_shift($temp);
	$key = str_replace(array('[[',']]'), '', $key);

	//sorting
	sort($temp, SORT_STRING | SORT_FLAG_CASE);

	$outputarray[$key] = $temp;
}
ksort($outputarray);
$json = json_encode($outputarray, JSON_PRETTY_PRINT);

echo "<pre>$json</pre>";