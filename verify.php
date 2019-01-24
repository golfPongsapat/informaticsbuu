<?php
$access_token = '/m69FQoSI0aAMDrVZBQ+IWNTYPLOiriDWSnxeQSt8q3SZ7tvWqLvy0GsYVTWMv+nJaTI8tMnwcAz/IrI7fWo8c5Lkmd6fI4XiMSHss+H/7jlsgxichlmOpkQoyefLD04gDd+ubywG3xVTSvZVyOuNwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
