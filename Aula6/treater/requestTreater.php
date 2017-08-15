<?php

require_once ("model/request.php");

class RequestTreater {


public function start() {

	$request = new Request($_SERVER['REQUEST_METHOD'],		$_SERVER['SERVER_PROTOCOL'], $_SERVER['HTTP_HOST'], explode('/', $_SERVER['REQUEST_URI']), $_SERVER['QUERY_STRING']);


	if($request->getMethod() != 'GET' && $request->getMethod() != 'POST' 		   && $request->getMethod() != 'PUT') {
		
		return json_encode(array('code' => 405, 'message' => 'method not allowed'));

}
	if($request->getMethod() == 'POST' && $request->getPath()[2] == 'user') {
 		return "cheguei!";
		//(new UserController())->create();
	}
}
}















