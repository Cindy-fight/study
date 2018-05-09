<?php

$handle = fopen('/tmp/yzm.csv', 'r+');

while ($file = fgetcsv($handle)){
	if (strlen($file[2]) == 5){
		$data[] = $file[1];
	}
}

fclose($handle);

echo count($data)  . "\n";

// var_dump($data);

$str = '';

foreach ($data as $val){
	$str .= '"' . $val . '",';
}

echo $str;