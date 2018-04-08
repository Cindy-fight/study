<?php
function getSign($str, $key)
{
	$signature = "";
	if (function_exists('hash_hmac'))
	{
		$signature = base64_encode(hash_hmac("sha1", $str, $key, true));
	}
	else
	{
		$blocksize    = 64;
		$hashfunc    = 'sha1';
		if (strlen($key) > $blocksize)
		{
			$key = pack('H*', $hashfunc($key));
		}
		$key    = str_pad($key,$blocksize,chr(0x00));
		$ipad    = str_repeat(chr(0x36),$blocksize);
		$opad    = str_repeat(chr(0x5c),$blocksize);
		$hmac     = pack(
				'H*',$hashfunc(
						($key^$opad).pack(
								'H*',$hashfunc(
										($key^$ipad).$str
										)
								)
						)
				);
		$signature = base64_encode($hmac);
	}
	$signature = urlencode($signature);
	return $signature;
}

$params = array(
		'phone'		=> '13658236542',
		'payCode'	=> 1,
		'cpid'		=> '123',
		'imsi'		=> '460077324161591',
		'imei' 		=> '863507035216183',
		'extension'	=> 'UhnfqotRYYi',
		'clientIp'	=> '110.245.192.230',
);
$cpKey = '8468f55673a734d4';
$a = ksort($params);
$b = urldecode(http_build_query($params)) . '&';
$sign = getSign($b, $cpKey);

var_dump($sign);



?>