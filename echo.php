<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$parameter = "";
if (count($argv) > 1){
	$parameter = $argv[1];
}

$parameterAsArray = json_decode($parameter);
$result['code'] = 0;
$result['parameters'] = $parameterAsArray;
$jsonString = json_encode($result);

$headers['Status'] = '200 OK';

$handlerResult["statusCode"] = 200;
$handlerResult["headers"] = $headers;
$handlerResult["isBase64Encoded"] = false;
$handlerResult["body"] = $jsonString;
$text = json_encode($handlerResult);
echo $text;
