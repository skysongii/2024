<?php
$cnt = $_GET['cnt'];

$json_response = json_encode($cnt,JSON_UNESCAPED_UNICODE);

echo $json_response;