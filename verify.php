<?php
$proxy = 'http://fixie:AHlPTYMdvzgxYpY@velodrome.usefixie.com:80';
$proxyauth = 'gusavoice@gmail.com:system1508';
$access_token = 'FqJ3FN92d9X6PbAM/pjc/j62/WbI3/wThTJsRNrou5EaecTUPLk2NFypo53q1Okpxpo86hyu9kHeGS63YR2m93TbYZX4PTTkkz2KC/L5hFZ4CjdTfJ+czn9vYT99TYbKiLPaIh4wXEYDLcNR9bChFQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
