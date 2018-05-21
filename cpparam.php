<?php
/****
 * 匹配  "2018-05-09 07:27:05 > [nvb9uExm7bxlxiv4AsvDb85C]# 提交验证码API请求成功" 中的sign
* **/
$handle = fopen('/tmp/cpparam.csv', 'r');

while ($file = fgetcsv($handle)){
	$data[] = $file;
}

// var_dump($data);  //59

fclose($handle);


$signArr = array();
foreach ($data as $key => $val){
	$sign = 'YX,263739,25,ff38,1829245,636001,21153dm' . substr($val[6], -10);
// 	var_dump($sign);
	array_push($signArr, $sign);
}

// exit();

echo count($signArr) . "\n";

array_unique($signArr);

echo count($signArr) . "\n";
// var_dump($signArr);


$str = '';

foreach ($signArr as $v){
	echo  '"' . $v . '",';
}


