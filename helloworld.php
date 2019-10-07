<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$handlerResult["statusCode"] = 200;
$handlerResult["body"] = 'Halo AWS Pop-up Loft Jakarta';
$text = json_encode($handlerResult);
echo $text;

