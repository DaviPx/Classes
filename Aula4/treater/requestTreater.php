<?php

require_once "../model/request.php";

//$_SERVER['REQUEST_URI'];
//$_SERVER['QUERY_STRING'];

$request = new Request($_SERVER['REQUEST_METHOD'],$_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST']);
var_dump($request);



