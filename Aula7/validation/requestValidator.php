<?php

include_once "IrequestValidator.php";

class RequestValidator implements IRequestValidator 
{
	private $resources = Array('users', 'admin', 'post');

	public function isMethodValid($method) {

		if($method != 'GET' && $method != 'POST' && $method != 'PUT') {
			return false;
		}

		return true;		
	}

	public function isValidUri($uri) {
		//checar se o path possui um resource válido
	}
}