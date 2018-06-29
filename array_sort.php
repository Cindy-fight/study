<?php


$arr=[
		array(
				'name'=>'小坏龙',
				'age'=>28
		),
		array(
				'name'=>'小坏龙2',
				'age'=>14
		),
		array(
				'name'=>'小坏龙3',
				'age'=>59
		),
		array(
				'name'=>'小坏龙4',
				'age'=>23
		),
		array(
				'name'=>'小坏龙5',
				'age'=>23
		),
		array(
				'name'=>'小坏龙6',
				'age'=>21
		),
];

$s = array_column($arr, 'age');
var_dump($s);

//对 $arr 中的age 排序
// array_multisort() 可以用来一次对多个数组进行排序，或者根据某一维或多维对多维数组进行排序。 
array_multisort(array_column($arr, 'age'), SORT_DESC, $arr);
var_dump($arr);

