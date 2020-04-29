<?php
$json = json_decode(file_get_contents('https://1968.freeway.gov.tw/api/getCrowdData?action=crowd&area=B'));
file_put_contents(__DIR__ . '/crowd.json', json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));