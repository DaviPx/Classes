<?php

require_once ("model/user.php");
require_once ("database/database.php");

class UserController {

	private $allowedUris = Array('info', 'register');
	private $request;
	
	public function __construct($request) {
		$this->request = $request;
	}			  

	public function routeOperation() {
		switch($this->request->getOperation()) {
			case 'register':
					(new DBHandler())->insert(json_decode($this->request->getBody()), 'users');
					return "ok";

		}
	}
	
	
	public function create($name, $email, $pass, $bd) {
		 	
	}

}
