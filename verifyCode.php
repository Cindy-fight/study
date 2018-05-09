<?php

$handle = fopen('/tmp/yzm.csv', 'r');

while ($file = fgetcsv($handle)){
	$data[] = $file;
}

// var_dump($data);  //8429

fclose($handle);

$verify = array();
foreach ($data as $val){
	if (strlen($val[2]) == 5){
// 		var_dump($val[2]);
		array_push($verify, $val[1]);
	}
}

echo count($verify) . "\n";

array_unique($verify);


echo count($verify);
// var_dump($verify);


$str = '';

foreach ($verify as $v){
	echo  ',"' . $v . '"';
}


