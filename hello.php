<?php

echo 'Hello World!';

$str = '{"code":"3000","command":"data##Qk4yW2JEeEhEdnh4bmJFRHtHemEwYzxjTnhfemJiYmJjSTw3X0hIK0dXOXp0aFFzTj1mSDk2bElZUWJ1ZGIwTm1ieGJjSERiRmI/dmImMGJiYlBKQVltc01dSFRvS2NIZiJNVmxkSTorVmUuVVI9||data##QlVCQFR8anc4QHhqcndud202anMyemxkMGJudm1xbHRxODg2c2k2OHhuMThAMjdAQE1HRkZQZ0AgZ2F2dnY0NmF2ODRANjYzODY4MTlAODI4ODQ0ODQwMkAyQDcyMTIwMDk2MzkxNzQ4N0A5NzYzNUAzNDQ3OTY4ODA4ODg0","port":"1065842232||10658422","type":"7","linkid":"T201804081508415601","orderNo":"ab2d4d383afb11e8a3eb52540058cbe3","secondNeed":"1","secondPort":"","secondType":"","secondUrl":"","secondFormat":"","url2":"","rdoUrl":"null","url":""}';
$arr = json_decode($str, true);
var_dump($arr);
$command = $arr['command'];
$port = $arr['port'];
var_dump($command);
var_dump($port);

$port1 = explode('||', $port);
var_dump($port1);

$command1 = explode('||', $command);
var_dump($command1);

$command_1 = explode('##', $command1[0]);
$command_2 = explode('##', $command1[1]);

var_dump($command_1);
var_dump($command_2);

echo '=====================================================';

if ($command && $port){
	
	if ($command_1[0] == 'data'){
		$type1 = 1;
	}
	if ($command_2[0] == 'data'){
		$type2 = 1;
	}
	$messages = array(
			array($port1[0], $command_1[1], '@'.$type1),
			array($port1[1], $command_2[1], '@'.$type2, '@'.'5'),
	);
}


var_dump($messages);

// 2018-05-01 15:01:03 > [eDlyez558z81n9C2crv7aax7]#   [GET] # 请求地址: http://112.74.141.3:8001/receipt/jsp/hqyx_service.jsp?
//orderId=nF6rhkzbOT&verifycode=517434&action=verify&channel=A002
// 2018-05-01 15:01:03 > 请求响应结果: {"resultCode":"0010","linkId":"","resultMsg":"error!, 没有配置，请联系我们。"}
// 2018-05-01 15:01:03 > [eDlyez558z81n9C2crv7aax7]# 提交验证码API请求失败


//http://112.74.141.3:8001/receipt/jsp/hqyx_service.jsp?action=verify&channel=A002&pay=a002hqyx151139

$m = '["<response><status>0<\/status><transIDO>15222888CXAc<\/transIDO><ConumeCode>UMPAYDG1500<\/ConumeCode><amount>1500<\/amount><serviceCode>888888888<\/serviceCode><phone>15264903619<\/phone><cParam>3zzLYCXAc<\/cParam><\/response>"]';

$me = json_decode($m, true);

var_dump($me);

var_dump($me[0]);

if (preg_match('/^(.*)$/', $me[0])){
	echo $me[0];
}


$test1 = array(
		'name'	=> 'cindy',
);
$test2 = $test1;
var_dump($test2);

var_dump(date('Y-m-d 00:00:00', strtotime('-1 day')));

var_dump(date('Y-m-d 00:00:00', strtotime('-1 month')));

var_dump(urldecode('YX%2C246673%2C4%2C2424%2C1812726%2C621007%2C201201LcVB8FLlrA000006'));

$wt = substr('460003739786411', -12);
var_dump($wt);

var_dump(base64_decode('131000OH000001B002LS001P017232106LIWiQ'));

echo strlen('2018-05-09 07:02:03 > [') . "\n";
echo strlen(']# 提交验证码API请求成功') . "\n";
echo strlen('4h8gyA6p4aub1l65ivtrvaba') . "\n";
?>