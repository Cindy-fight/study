<?php

/**
 * PHP 保留小数点后两位的三种方法
 */


// 第一种  小数点后取几位  但是不能进位
$str1 = 3.1415926;
$str2 = floor($str1 * 100) / 100;
var_dump($str2);   


//对于有多位小数的取两位，还不能进位，可用
$str3 = floor(2/3 * 10000) / 10000 * 100;
$str4 = $str3 . '%';
var_dump($str4);




// 第二种  使用PHP 自带函数round()  特点：四舍五入
$str5 = round($str1, 3);
var_dump($str5);



// 第三种 printf  也是四舍五入
$str6 = sprintf("%.3f", $str1);
var_dump($str6);

$number = 2;
$strs = 'Shanghai';
$txt = sprintf('There are %u millon cars in %s.', $number, $strs);
var_dump($txt);

echo '=======================================';

//其他取整函数
$str = 6.68;

// intval()
$str7 = intval($str);
var_dump($str7);

// ceil()
$str8 = ceil($str);
var_dump($str8);

// floor()
$str9 = floor($str);
var_dump($str9);

// round()
$str10 = round($str);
var_dump($str10);




