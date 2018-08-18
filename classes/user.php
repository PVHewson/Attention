<?php
class User {
	private $_iduser;
	private $_username;
	private $_password;
	private $_canEdit;
	private $_canAuthor;
	private $_canApprove;
	private $_familyName;
	private $_givenName;
	
	function __construct() {
		;
	}
	
	function register($attributes) {
		$_SESSION['user']['name']=$user;
		$_SESSION['user']['email']=$user;
	}
	
	function login($username, $password) {
		$_SESSION['user']['name']=$username;
		$_SESSION['user']['email']=$password;
	}
	
	private function attribs() {
		return array(
		    'regGivenName',
		    'regFamilyName'
		);
	}
}

?>
