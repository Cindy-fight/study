<?php

echo 'Hello World!';

// $str = '{"code":"3000","command":"data##Qk4yW2JEeEhEdnh4bmJFRHtHemEwYzxjTnhfemJiYmJjSTw3X0hIK0dXOXp0aFFzTj1mSDk2bElZUWJ1ZGIwTm1ieGJjSERiRmI/dmImMGJiYlBKQVltc01dSFRvS2NIZiJNVmxkSTorVmUuVVI9||data##QlVCQFR8anc4QHhqcndud202anMyemxkMGJudm1xbHRxODg2c2k2OHhuMThAMjdAQE1HRkZQZ0AgZ2F2dnY0NmF2ODRANjYzODY4MTlAODI4ODQ0ODQwMkAyQDcyMTIwMDk2MzkxNzQ4N0A5NzYzNUAzNDQ3OTY4ODA4ODg0","port":"1065842232||10658422","type":"7","linkid":"T201804081508415601","orderNo":"ab2d4d383afb11e8a3eb52540058cbe3","secondNeed":"1","secondPort":"","secondType":"","secondUrl":"","secondFormat":"","url2":"","rdoUrl":"null","url":""}';
// $arr = json_decode($str, true);
// var_dump($arr);
// $command = $arr['command'];
// $port = $arr['port'];
// var_dump($command);
// var_dump($port);

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


$resultStr = '{"status":"OK","payId":"20180510bhe8537563","codeOrderId":"4y5ahe8503472","payMethod":"1","commonPayOpts":[{"paySmsInfo":{"smsPort":"10658423","smsContent":"{base64}bXZ3bGFuLDJmYWY3YTFjYzEzNTUzNDBjOTY4MDcwODNjZjgxMjY2LERrcVg="}},{"paySmsInfo":{"smsPort":"1065842232","smsContent":"{base64}Qk4yW2JEbHp2SEdjS2JBeEtiR0MzeD14cXhfemJiRnZIXT9wX0hsLmNMM3p2 cGwzUj4wWEVmQ0FuUWJ1ZGIzcU1idkRIYmNGRmI+Y2ImMGJiYlBKdnYnNEFM eVBoMk1ySG5RSnFwM2UzXjZKWVU9"}}]}';
$resultArr = json_decode($resultStr, true);
var_dump($resultArr);


if (true){
	$smsContent1 = $resultArr['commonPayOpts'][0]['paySmsInfo']['smsContent'];
	$smsContent2 = $resultArr['commonPayOpts'][1]['paySmsInfo']['smsContent'];
	if (preg_match('/(.*)\{base64\}(.*)/', $smsContent1, $matches1)){
		$sendType1 = 1;
		$resultArr['commonPayOpts'][0]['paySmsInfo']['smsContent'] = $matches1[2];
	}
	if (preg_match('/(.*)\{base64\}(.*)/', $smsContent2, $matches2)){
		$sendType2 = 1;
		$resultArr['commonPayOpts'][1]['paySmsInfo']['smsContent'] = $matches2[2];
	}
}

var_dump($resultArr['commonPayOpts'][0]['paySmsInfo']);

var_dump($resultArr['commonPayOpts'][1]['paySmsInfo']);


// from django.urls import path

// from . import views

// urlpatterns = [
// 		path('articles/<int:year>/', views.year_archive),
// 		path('articles/<int:year>/<int:month>/', views.month_archive),
// 		path('articles/<int:year>/<int:month>/<int:pk>/', views.article_detail),
// ]

var_dump(base64_encode('register use plog by wtt'));

var_dump(base64_decode('MTA2NTk4NjI='));



$data = array(
		'cpparamKey'	=> 'wttghtsgsgsgtest',
);
$cpparamKey = 'cpparamKey';
$cpparamHandle = 0;
$cpparamPrefix = 'wtt';
$cpparamSuffix = 'test';
if (isset($cpparamHandle) && is_numeric($cpparamHandle) && $cpparamHandle > 0){
	echo '1';
	if ($cpparamHandle == 1){//多出前后缀
		echo 2;
		$data[$cpparamKey] = str_replace($cpparamPrefix, '', $data[$cpparamKey]);
		$data[$cpparamKey] = str_replace($cpparamSuffix, '', $data[$cpparamKey]);
	}elseif ($cpparamHandle == 2){//少了前后缀
		echo 3;
		$len = strlen($data[$cpparamKey]) + strlen($cpparamPrefix);
		$data[$cpparamKey] = str_pad($data[$cpparamKey], $len, $cpparamPrefix, STR_PAD_LEFT);
		$len2 = $len + strlen($cpparamSuffix);
		$data[$cpparamKey] = str_pad($data[$cpparamKey], $len2, $cpparamSuffix, STR_PAD_RIGHT);
	}elseif ($cpparamHandle == 3){//需要urldecode
		echo 4;
		$data[$cpparamKey] = urldecode($data[$cpparamKey]);
	}
}
var_dump($data);


$date = date('YmdHis');
var_dump($date);
var_dump(substr($date, 0, 8));


// Whenever you do a deed of kindness,you plant the seed of goodness whose blessing may or may not touch you immediately,
//but it will undoubtly reach you one day in the future.
//无论何时你做出一件善举，你都种下了一颗善良的种子。它的果实也许不会立刻结成，但一定会在未来的某一天来到你身边。


var_dump(base64_decode('MA=='));

var_dump(json_decode('["28","12","1","18","29","19"]'));



$a = '{"phone":"18249072672","imsi":"460077768830594","imei":"863447032090911","iccid":"898600A7083796880594","ip":"117.136.56.148","amount":"1000","pay_code":"10","app_orderid":"CDK9VCsOJQnU","merc_id":"2000190","app_id":"daeb2c705fe411e898bfc6a10b512583","corp_type":"1","is_monthly":"2","scheme":"1","ver":"3.0","noti_url":"http:\/\/data.maimob.cn\/index.php\/Out\/CMP\/ss\/72tJDenN7q","time":"1527764985","sign":"79d741546baf5ecdb38e785672fd0542"}';
$b = json_decode($a, true);
$c = http_build_query($b);
echo $c;


var_dump(base64_decode("bXZ3bGFuLDkyMzc0YjBjYjQ5N2NiOGMyMjNjYWY3Y2FlYzU1YTMxLFRnMU9AQEBCTjJbYkZIeGNG\nY2NLYlx4e2JHYUp4eGN3SF96YmJGREY5OkN5R2MpbDdaW3BQMnV4R3FFbTBOd3pRYnVkYktOd2Jj\nRkdGR0ZGYj5jYiYwYmJiUFlrQ21RfTpVT19HZmVKV1ZubHkzOlM2Ry9NUD0="));


var_dump(base64_decode("bXZ3bGFuLDkyMzc0YjBjYjQ5N2NiOGMyMjNjYWY3Y2FlYzU1YTMxLFRnMU9AQEBCTjJbYkZIeGNG\nY2NLYlx4e2JHYUp4eGN3SF96YmJGREY5OkN5R2MpbDdaW3BQMnV4R3FFbTBOd3pRYnVkYktOd2Jj\nRkdGR0ZGYj5jYiYwYmJiUFlrQ21RfTpVT19HZmVKV1ZubHkzOlM2Ry9NUD0="));




$c1 = unserialize($str);


$d = '{"status":"OK","payId":"20180606aakN465319","codeOrderId":"000000000000mgmzttnEXtz0","payMethod":"1","commonPayOpts":[{"paySmsInfo":{"smsPort":"10655198019##1","smsContent":"{base64}MjIwMTgwNjA2MTAyMDUwWmdWYVl2OHpJTlM4YWE2OHJFN2lRMGtSTU5WTVhJRy93OTUyWDI4QmFQcnNNWkhFL3RsMjY3WWVaa0U9"}}]}';
$d1 = json_decode($d, true);
var_dump($d1['commonPayOpts'][0]['paySmsInfo']['smsPort']);
$smsPort = $d1['commonPayOpts'][0]['paySmsInfo']['smsPort'];
if (preg_match('/^(\d{1,15})##1$/', $smsPort, $matches)){
	$d1['commonPayOpts'][0]['paySmsInfo']['smsPort'] = $matches[1];
}
var_dump($d1['commonPayOpts'][0]['paySmsInfo']['smsPort']);


$api = json_decode('{"url":"http:\/\/65.52.166.96\/AppPlayer\/D\/ApInfo\/UpPn\/info?","data":{"phone":"13356432013","imsi":"99000560317415","cp":"mg","":null}}', true);

$url = $api['url'] . http_build_query($api['data']);
echo $url;


var_dump($api);



// {"url":"http:\/\/65.52.166.96\/AppPlayer\/D\/ApInfo\/UpPn\/info?","data":{"phone":"13356432013","imsi":"99000560317415","cp":"mg","":null}}
$SEQID = 4744;
$res = <<<EOC
<?xml version="1.0" encoding="utf-8"?>
<ROOT>
	<MSGTYP>DeliverResp</MSGTYP>
	<SEQID>{$SEQID}</SEQID>
	<RET>0</RET>
</ROOT>
EOC
;

// var_dump($res);



function Test(){
	$res = <<<EOC
<?xml version="1.0" encoding="utf-8"?>
<ROOT>
	<MSGTYP>DeliverResp</MSGTYP>
	<SEQID>4733</SEQID>
	<RET>0</RET>
</ROOT>
EOC
	;
	return $res;
}


var_dump(Test());


$string = null;
if ($string != ''){
	echo '123';
}


if ($string){
	echo '456';
}


// 请求地址: http://47.93.113.237:8888/api/vdo/hz/al/lhyy/pay?linkId=EOHZP4pjNu&verifyCode=860001&ins=LHYY0015MG01
// 2018-06-07 16:00:51 > 请求响应结果: {"result":0,"msg":{"reqMethod":["The req method field is required."],"payId":["The pay id field is required."],"reqUrl":["The req url field is required."]}}
// 2018-06-07 16:00:51 > [Afit3rocqvqtc7gmnottcstr]# 提交验证码API请求失败


//请求地址: http://47.93.113.237:8888/api/vdo/hz/al/lhyy/pay?
//linkId=ssx1528360895730YMJZ3jK9RP&payId=20180607bgFz841399&reqMethod=POST&verifyCode=027195&ins=LHYY0015MG01&reqUrl=http%3A%2F%2Fcharge.51mrp.com%2Fcode-open-plat%2Fcharge%2Fcommon%2Fpm5%2FcommitVerifyCode.do 
// 2018-06-07 16:41:53 > 请求响应结果: {"status":"OK","errorMsg":""}


$d2 = '{"status":"OK","payId":"20180607dhU4506326","codeOrderId":"1y67hU4611663xs9sadkz3zs","payMethod":"1","commonPayOpts":[{"paySmsInfo":{"smsPort":"10655198018##1","smsContent":"{base64}Z3BwMDlyeUtPbktESHFvc0QvWkxDbXpOblR4Rml0RWs2YmFTT0NiVEZWZ3BJUXNOVWhEY2w2TDFaRW85UFphbTZ1TXB6VW5UYjhxUXRKNFZxc241VU5QVUMxdUd2ZmxVRjhsdlcvMUxhemhibGo3bUttYldlSGU2U24yNDVsNUti"}}]}';
$d3 = json_decode($d2, true);
var_dump($d3['commonPayOpts'][0]['paySmsInfo']['smsPort']);
var_dump($d3['commonPayOpts'][0]['paySmsInfo']['smsContent']);



$d4 = '{"result":"200","resultMsg":"成功","orderNo":""DSR1528366456847386"","payType1":"1","port1":"1065842232","sms1":"BN2[bbbbxbcDeD^F2DDa0DHDfv_zbbFlF9?X[vb-xGEucpCFF9tDfHsoGQbudbKNODbDHDxbFb>cb&0bbbP5XM.l\\a9yRo@qy4U6&9d*Tb/Dc=","payType2":"4","port2":"","sms2":""}';
$d5 = json_decode($d4, true);
var_dump($d5);


//http://121.14.17.248:61504/Sys/CodePool/gmsg1504/GetMsg.aspx?mobile=18315212335&imsi=460025252419017&imei=111111111111119&iccid=898602a2310025249017&ip=223.104.250.58&price=2000&cpparam=XQMH7xMJUUKPhJs&CPID=70415205&COID=70415208&paycode=70415172 

$startTime = strtotime('2018-06-11');
$endTime = $startTime + 86400;


var_dump($startTime);
var_dump($endTime);


$ver = substr('4.4.2', 0, 1);
var_dump($ver);

// $rate = round(48 / 128, 4) * 100 . '%';
// var_dump($rate);


$min = 100;
$max = 2100;
$percent30 = intval(($min + $max) / 3);
$percent50 = intval(($min + $max) / 2);
$percent80 = $percent30 + $percent50;
var_dump($percent30);
var_dump($percent50);
var_dump($percent80);





// $result = array(
// 		'2017-06-11' . '-OS-' . '4' . '-requestMoney' 	=> 2800,
// 		'2017-06-11' . '-OS-' . '4' . '-successMoney'	=> 5900,
// 		'2017-06-11' . '-OS-' . '5' . '-requestMoney' 	=> 1236,
// 		'2017-06-11' . '-OS-' . '5' . '-successMoney'	=> 8963,
// 		'2017-06-11' . '-OS-' . '6' . '-requestMoney' 	=> 963,
// 		'2017-06-11' . '-OS-' . '6' . '-successMoney'	=> 5900,
// 		'2017-06-11' . '-OS-' . '7' . '-requestMoney' 	=> 2583,
// 		'2017-06-11' . '-OS-' . '7' . '-successMoney'	=> 89211,
// );


$encodeStr = '{"2018-06-11-OS-6-requestMoney":549073600,"2018-06-11-OS-6-successMoney":5058700,"2018-06-11-OS-5-requestMoney":591058000,"2018-06-11-OS-5-successMoney":5179200,"2018-06-11-OS-4-requestMoney":412642500,"2018-06-11-OS-4-successMoney":3266000,"2018-06-11-OS-8-requestMoney":110213600,"2018-06-11-OS-8-successMoney":1399200,"2018-06-11-OS-7-requestMoney":332442200,"2018-06-11-OS-7-successMoney":3917200,"2018-06-11-OS-2-requestMoney":10414400,"2018-06-11-OS-2-successMoney":28800,"2018-06-11-OS-3-requestMoney":6062700,"2018-06-11-OS-3-successMoney":10800,"2018-06-11-OS-9-requestMoney":12800,"2018-06-11-OS-9-successMoney":0,"2018-06-11-OS---requestMoney":8200,"2018-06-11-OS---successMoney":0}';
$result = json_decode($encodeStr, true);
var_dump($result);


$requestMoney = 0;
$successMoney = 0;
foreach ($result as $key => $val){
	$time = substr($key, 0, 10);
	$version = substr($key, 14, 1);
	$moneyKey = substr($key, -12);
	echo $moneyKey;
	if ($moneyKey == 'requestMoney'){
		$requestMoney = $val;
	}
	if ($moneyKey == 'successMoney'){
		$successMoney = $val;
	}
	if ($successMoney > 0 && $requestMoney > 0){
		$rate = round($successMoney / $requestMoney, 4) * 100 . '%';
	}else {
		$rate = 0;
	}
	
	$str = $time . ',' . $version . ',' . $successMoney . ',' . $requestMoney . ',' . $rate . "\n";
	
	var_dump($str);
	
	$fp = fopen('/tmp/wtt_data.csv', 'a+');
	fwrite($fp, $str);
	fclose($fp);
}

echo '进度：100%  success ';


for ($j=0;$j<=3;$j++){
	$times = 1527782400 + 86400 * $j;
	$date = date('Y-m-d',$times);
	var_dump($date);
}

$os = '0';
if (isset($os) && $os){
	var_dump($os);
}


$f1 = '{"2018-06-01-OS-8-requestMoney":110064600,"2018-06-01-OS-8-successMoney":1519000,"2018-06-01-OS-5-requestMoney":923375500,"2018-06-01-OS-5-successMoney":8380400,"2018-06-01-OS-7-requestMoney":461482500,"2018-06-01-OS-7-successMoney":5709900,"2018-06-01-OS-4-requestMoney":751600300,"2018-06-01-OS-4-successMoney":5306100,"2018-06-01-OS-6-requestMoney":860595600,"2018-06-01-OS-6-successMoney":7696300,"2018-06-01-OS-3-requestMoney":7063600,"2018-06-01-OS-3-successMoney":5400,"2018-06-01-OS-2-requestMoney":12667900,"2018-06-01-OS-2-successMoney":37700,"2018-06-01-OS-9-requestMoney":16700,"2018-06-01-OS-9-successMoney":0,"2018-06-01-OS-A-requestMoney":42900,"2018-06-01-OS-A-successMoney":0,"2018-06-01-OS-u-requestMoney":6400,"2018-06-01-OS-u-successMoney":0} ';
$f2 = json_decode($f1, true);
var_dump($f2);


for ($i = 300500; $i <= 360000; $i+=5000){
	 var_dump($i);
	 echo  '    ' . $i+5000;
}

var_dump(date('Y-m-d 00:00:00', strtotime('-1 day')));

// $start = date('Y-m-d', strtotime('-1 day'));
// var_dump($start);

$start = strtotime('2018-06-18');
var_dump($start);

$end = strtotime(date('Y-m-d'));
var_dump($end);

// 174343478
// 173343478



$imsiArr = array();
$datas = array(
		'0'		=> array(
				'imsi' => '123'
		),
		'1'		=> array(
				'imsi' => '456'
		),
		'2'		=> array(
				'imsi' => '789'
		),
);
foreach ($datas as $key => $data){
	$imsiArr[] = $data['imsi'];
}
var_dump($imsiArr);

$imsiStr = implode(',', $imsiArr);

echo $imsiStr;

$wtt = '2018-06-13-model-cooplad';
$wttlen = strlen($wtt);
$wttlena = $wttlen - strlen('2018-06-13-model-');
var_dump($wttlen);
$wtt1 = substr($wtt, -$wttlena);
var_dump($wtt1);


var_dump(strlen('2018-06-13-model-cooplad-requestMoney'));


$models = substr('2018-06-13-model-cooplad-requestMoney', 17, 7);
var_dump($models);

var_dump(strlen('O09O6MIFPJ35WBKM'));

var_dump(date('Y-m-d H:i:s', 1529458446));

$start = strtotime(date('Y-m-d', strtotime('-1 day')));
$end = strtotime(date('Y-m-d'));

var_dump($start); //1529337600
var_dump($end); //1529424000
for ($i = $start; $i < $end; $i+=3600){
	$t = date('Y-m-d H:i:s', $i);
	var_dump($t);
}


$model = 0;
if (isset($model) && $model){
	var_dump($model);
}

$solidResult = array();
$solidResult1   = array(
		'12306','999','0',
);
array_push($solidResult, $solidResult1);
var_dump($solidResult);

$arr = array(
		'0'	=> '3356',
		'1'	=> '3821',
		'2'	=> '3456'
);
$arr1 = array(
		'0'	=> '2345',
		'1'	=> '3821',
		'2' => '3356',
);
$s = array_diff($arr, $arr1);
var_dump($arr);
var_dump($s);


var_dump(date('Y-m-d H:i:s', 1529458446));


var_dump($_SERVER);


var_dump(urldecode('https://pan.baidu.com/play/video#/video?path=%2FMOVIE%2F1.mkv&t=-1'));


$g = json_decode('{"code":"384545","phone":"15622066581","price":"2000","model":"xiaomi","appId":"1007","feetype":"1","cmd_type":"1"}', true);
echo http_build_query($g);



var_dump(strlen('/index.php/admin/'));



$record = preg_match('/(.*)(AdminLists)(.*)/', '/index.php/admin/AdminList/pane/6/ctid/6', $preg);
var_dump($record);
var_dump($preg);


$array1 = array(
		'name'	=> 'cindy'
);
$array2 = array(
		'age'	=> 18
);
$array3 = array(
		'job'	=> 'programmer'
);

$list = array_merge($array1, $array2, $array3);
var_dump($list);

var_dump(strtotime('2018-07-02 00:00:00'));


$h = ' {"MSGTYP":"Report","SEQID":"1160507160","SRCADDR":"13599862151","SRCADDRTYPE":"200","DESTADDR":"106581673310","MSG":"0","TOPID":"MMS","SRVCODE":"170101","LINKID":"1160503213","MASTERID":"10006","CMDID":"03","CORID":"71501","VER":"1.0","MODATE":"2018-07-05 16:28:21.0"}';
$h1 = json_decode($h, true);
$h2 = http_build_query($h1);
var_dump($h2);



var_dump(urldecode('04%3A4F%3A4C%3A68%3A83%3AE7'));


var_dump(urldecode('90%3AB6%3A86%3A73%3A6E%3A85'));


var_dump(base64_encode('fUG/4sjhjVfBQWwa3N/okmiJKM+c8ZJKM6Ns2CxiU5x914FBv8Lw+pEGpulTwcdTYjLL+GYfUh1rK7IQ/WQ2wHh++IHA/6/sYRCf6BTHelef7z5gIUDRXi+7C1h+rMW8Mb+dPBz/+Gk3MHaux52nOlw=='));


var_dump(base64_decode('ZlVHLzRzamhqVmZCUVd3YTNOL29rbWlKS00rYzhaSktNNk5zMkN4aVU1eCtYb08xUmdaTU1ycjJxSWhOd29PSERFbjRtNkk3ZkR5SlhNY2xPU0RIQmxXN20vbmtyNzRLdEwvTFhSdjNvUCtDTEtSYjRWSkxXSEhCaHdIWDloaFNPNDBseDFpcm0vUytvMnhTaTNBdGFYdz09'));

var_dump(strlen('fUG/4sjhjVfBQWwa3N/okmiJKM+c8ZJKM6Ns2CxiU5x+XoO1RgZMMrr2qIhNwoOHDEn4m6I7fDyJXMclOSDHBlW7m/nkr74KtL/LXRv3oP+CLKRb4VJLWHHBhwHX9hhSO40lx1irm/S+o2xSi3AtaXw=='));

var_dump(base64_decode('NzgxYjE4NmVjMGE4NmE1MDcxNzA5NTc0NzU4NzA4NDSxvsz1w+K30bbM0MXTw9Pav+zL2bXHwryjrMfrzvDQ3rjE'));

$dictStr = '{"took": 23, "timed_out": false, "_shards": {"total": 5, "successful": 5, "skipped": 0, "failed": 0}, "hits": {"total": 4, "max_score": 1.0, "hits": [{"_index": "articleindex", "_type": "doctype", "_id": "0", "_score": 1.0, "_source": {"articleid": "2", "title": "title", "content": "content"}}, {"_index": "articleindex", "_type": "doctype", "_id": "2", "_score": 1.0, "_source": {"articleid": "2", "title": "wtttest", "content": "wtttest"}}, {"_index": "articleindex", "_type": "doctype", "_id": "1", "_score": 1.0, "_source": {"articleid": "2", "title": "title", "content": "content"}}, {"_index": "articleindex", "_type": "doctype", "_id": "3", "_score": 1.0, "_source": {"articleid": "2", "title": "hello", "content": "world"}}]}}';

$dictArr = json_decode($dictStr, true);
var_dump($dictArr);


$mobile = 15508227316;
if(!$mobile) {
	echo $mobile;
}else {
	echo '123';
}


$confirm_data = array(
		'app_id'		=> 113,
		'order_id'		=> 'wtttest',
		'send_status'	=> 2,
		'num'			=> 1,
		'timestamp'		=> time(),
);
$a = ksort($confirm_data);
var_dump($confirm_data);


$confirm_sign = strtoupper(md5(http_build_query($confirm_data) . '&signkey=GtxF8q5lJh97pL1v'));

var_dump($confirm_sign);

$confirm_data['sign']	= $confirm_sign;


var_dump($confirm_data);


$data123 = [
		'cno'		=> '1',
		'feeid'		=> '5',
		'mobileno '	=> 2,
		'orderno'	=> '2',
		'Content'	=> 'wtt test',
		'imsi'		=> 460,
		'imei'		=> 460,
];
var_dump(http_build_query($data123));


$la = 'http://47.104.92.235:8080/Lakala/client/upMob.do?cno=sn50004FYYD&feeid=5&mobileno+=15982585088&orderno=uDrgb9VbkM&Content=%E5%B0%8A%E6%95%AC%E7%9A%84%E4%B8%AD%E5%9B%BD%E7%A7%BB%E5%8A%A8%E5%AE%A2%E6%88%B7%EF%BC%8C%E8%8B%8F%E5%AE%81%E6%98%93%E8%B4%AD5%E5%85%83%E7%94%B5%E5%AD%90%E5%8D%A1%E9%9C%80%E6%89%A3%E5%87%8F460%E7%A7%AF%E5%88%86%EF%BC%8C%E5%9B%9E%E5%A4%8D75%E5%B0%86%E7%9B%B4%E6%8E%A5%E5%85%85%E5%85%A515982585088%E5%AF%B9%E5%BA%94%E8%B4%A6%E6%88%B7%E3%80%82%E5%A6%82%E6%82%A8%E4%B8%8D%E7%A1%AE%E5%AE%9A%E8%B4%A6%E6%88%B7%E6%98%AF%E5%90%A6%E6%AD%A3%E7%A1%AE%EF%BC%8C%E5%8F%AF%E7%99%BB%E9%99%86%E7%A4%BC%E5%93%81%E4%BD%BF%E7%94%A8%E5%B9%B3%E5%8F%B0%E6%9F%A5%E7%9C%8B%E3%80%82%E8%AF%B7%E6%82%A8%E5%9C%A830%E5%88%86%E9%92%9F%E5%86%85%E5%AE%8C%E6%88%90%E6%9C%AC%E6%AC%A1%E6%93%8D%E4%BD%9C%EF%BC%8C%E5%A6%82%E6%9C%89%E7%96%91%E9%97%AE%E5%8F%AF%E8%87%B4%E7%94%B510086%E3%80%82%E3%80%90%E4%B8%AD%E5%9B%BD%E7%A7%BB%E5%8A%A8%E7%A7%AF%E5%88%86%E8%AE%A1%E5%88%92%E3%80%91&imsi=460029825242544&imei=860191039281544';
$las = urldecode($la);
var_dump($las);







?>