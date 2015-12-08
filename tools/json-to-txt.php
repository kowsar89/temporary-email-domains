<?php
$contents = file_get_contents('example-json.txt');

$contents = json_decode($contents, true);

$output = '';
foreach ($contents as $key => $value) {
	//var_dump($domain);
	//$output .= $key;
	$output .= "[[$key]]";
	$output .= PHP_EOL;
	foreach ($value as $singlevalue) {
		$output .= $singlevalue;
		$output .= PHP_EOL;
	}
	$output .= '====';
	$output .= PHP_EOL;
}
$output = rtrim($output, PHP_EOL);
$output = rtrim($output, '====');


echo "<pre>$output</pre>";
