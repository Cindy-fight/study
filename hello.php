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

// [POST] # 请求地址: http://charge.51mrp.com/code-open-plat/charge/request.do
// {"phone":"18332740300","imsi":"460025327751982","imei":"865389030316674","ip":"106.116.224.184","price":2000,"payPoint":"3","linkId":"nxbzpmWl1k","appId":"7012985","merchantId":"21778","appName":"\u8d2a\u5403\u86c7\u5927\u4f5c\u6218","payPointName":"\u9053\u5177\u793c\u5305","payMethod":"2","codeType":"7","notifyUrl":"http:\/\/data.maimob.cn\/index.php\/Out\/CMP\/ss\/sQWRKqZQsp","channelId":"daji_123456","mac":"1a:2a:3a:4a","provinceCode":"50000","orderTime":"20180412144556","md5":"15353AAB410A5F52670C4B6B3328397C"}
// {"status":"OK","payId":"20180412beJV039178","codeOrderId":"1jfw5trdtj","payMethod":"1","commonPayOpts":[{"paySmsInfo":{"smsPort":"1065842232","smsContent":"{base64}Qk4yW2JER0d6SEdjS2xcO2hiR0NLREd6T0hfemJiRmxHQTpDX0R2JEZMM3p2cGwzUjxiNyxHWUg2UWJ1ZGIwcU5iekh6RHhGRmI+Y2ImMGJiYlBmTiVmbWFSQFFDV099N0UxVXVIMmVxR1ItbEg9"}},{"paySmsInfo":{"smsPort":"10658423","smsContent":"mvwlan,c571866d877bf68e94d10e9ba5586487,T1t5"}}]}


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

?>