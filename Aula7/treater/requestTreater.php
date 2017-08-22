<?php

require_once ("model/request.php");
require_once ("validation/requestValidator.php");

class RequestTreater {


public function start() {

	$valid = (new RequestValidator)->isMethodValid($_SERVER['REQUEST_METHOD']);

	$entityBody = file_get_contents('php://input');

	$request = new Request($_SERVER['REQUEST_METHOD'],$_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST'], explode('/', $_SERVER['REQUEST_URI']), $_SERVER['QUERY_STRING'], $entityBody);


	if($request->getMethod() == 'POST' && $request->getPath()[2] == 'user') {
 		
 		return $valid;
 		//return $request->getBody();
		//(new UserController())->create();
	}
}
}















