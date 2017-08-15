<?php

require_once ("model/request.php");

class RequestTreater {


public function __construct() {
	$this->start();
}

private function start() {

$request = new Request($_SERVER['REQUEST_METHOD'],$_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI'], $_SERVER['QUERY_STRING']);


if($request->getMethod() != 'GET' && $request->getMethod() != 'POST' && $request->getMethod() != 'PUT') {

	echo '{
		"code": 405
		"message": "method not allowed"
              }';

	
}
	

}
}
