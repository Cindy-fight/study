<?php
/****
 * 匹配  "2018-05-09 07:27:05 > [nvb9uExm7bxlxiv4AsvDb85C]# 提交验证码API请求成功" 中的sign
 * **/
$handle = fopen('/tmp/wtt.csv', 'r');

while ($file = fgetcsv($handle)){
	$data[] = $file;
}

// var_dump($data);  //219

fclose($handle);

$signArr = array();
foreach ($data as $val){
// 	$len = strlen($val[0]);
	$sign = substr($val[0], 23, 24);
	array_push($signArr, $sign);
}

echo count($signArr) . "\n";

array_unique($signArr);

echo count($signArr) . "\n";
// var_dump($signArr);


$str = '';

foreach ($signArr as $v){
	echo  '"' . $v . '",';
}


