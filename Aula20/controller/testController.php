<?php

include_once ('test/user_test.php');

class TestController {
	

	public function routeOperation() {

		testInsertValidUser();
		testGetAllUsers();

	}

}