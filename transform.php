<?php
/****
 * 将 4361-04-21_2.csv 的第三列的值 拿出来 base64_decode() , 然后重新写入文件
 * **/

$handle = fopen('/tmp/4361-04-21_2.csv', 'r');

while ($file = fgetcsv($handle)){
	$data[] = $file;
}

// var_dump($data);  //219
fclose($handle);

// exit();

$signArr = array();
foreach ($data as $key => $val){
	if ($key > 0){
		$spoid = $val[2];
		$orderNo = base64_decode($spoid);
		// 	var_dump($orderNo);
		$data[$key][2] = $orderNo;
	}
}

var_dump($data);

$newHandle = fopen('/tmp/test.csv', 'a+');
foreach ($data as $key => $val){
	$str = $val[0] . ',' . $val[1] . ',' . $val[2] . ',' .  $val[3] . "\n";
	fwrite($newHandle, $str);
}
fclose($newHandle);


