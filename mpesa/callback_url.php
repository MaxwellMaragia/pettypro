<?php
$callBackResponse = file_get_contents('php://input');

$logFile = "callBackResponse.txt";
$log = fopen($logFile, "a");
fwrite($log,$callBackResponse);
fclose($log);