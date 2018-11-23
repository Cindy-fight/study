<?php
function test(){
	$cpRequestUrl = \Yii::$app->request->hostInfo. '##########' .\Yii::$app->request->url;
	var_dump($cpRequestUrl);
}

test();


// $model 示例  $smsTransactionM = new SmsTransaction();
function array2object($model, $array){
	$attributes = $model->attributes;
	foreach ($attributes as $key => $val){
		if (isset($array[$key])){
			$model->$key = $array[$key];
		}
	}
	return $model;
}