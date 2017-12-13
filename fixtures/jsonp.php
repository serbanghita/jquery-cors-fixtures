<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

$callback = $_GET['callback'];

exit($callback . '('.json_encode(array('status' => 'success', 'msg' => 'Thank you!')).');');