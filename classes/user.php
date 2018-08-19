<?php
require_once 'classes/db.php';

class User {
	private $_iduser;
	private $_username;
	private $_familyName;
	private $_givenName;
	private $_email;
	private $_password;
	private $_photo;
	private $_canEdit;
	private $_canAuthor;
	private $_canPublish;
	private $_isAdmin;
	private $_loggedIn;
	private $_dbTable = 'tbl_user';
	
	function __construct() {
		$this->_loggedIn = false;		
	}
	
	function register($attributes) {
		$db = New DbConnect();

		try {
			//Populate & Validate
			$this->_username=$attributes['regUsername'];
			$this->_password=$attributes['regPassword'];
			$this->_email=$attributes['regEmail'];
			$this->_givenName=$attributes['regGivenName'];		
			$this->_familyName=$attributes['regFamilyName'];		
			//$this->_photo=$attributes['photo'];
			$this->_photo='';
			$this->_canAuthor = true;

			$attributes = array (
			  'given_name',
			  'family_name',
			  'email',
			  'username',
			  'password'
			);
			$values = array (
			  "'" . $this->_givenName . "'",
			  "'" . $this->_familyName . "'",
			  "'" . $this->_email . "'",
			  "'" . $this->_username . "'",
			  "'" . md5($this->_password) . "'"
			);

			$found = $db->readAll($this->_dbTable, false, 'username', "'$this->_username'");
			if (count($found) != 0){
				//Invalid username
				throw new Exception('Username is already taken');
			}


			$insert = $db->insert($this->_dbTable, $attributes, $values);
			if($insert){
				$this->_iduser = $insert;
				$this->_loggedIn = true;
			}							
		}
		catch (Exception $e)
		{
			$db->close();		
			echo $e->getMessage();
		}
	}
	
	function login($username, $password) {
		try {
			$db = New DbConnect();
			$found = $db->readAll($this->_dbTable, false, 'username', "'$username'");
			if ($found == false){
				//Invalid username
				throw new Exception('Invalid username');
			}
			$foundUser = $found[0];
//			$fp = md5($password);
			if (md5($password) !== $foundUser['password']){
				//Invalid password
				throw new Exception('Invalid password');
			}

			$this->_username=$foundUser['username'];
			$this->_email=$foundUser['email'];
			$this->_givenName=$foundUser['givenName'];		
			$this->_familyName=$foundUser['familyName'];		
			//$this->_photo=$attributes['photo'];
			$this->_photo='';
			$this->_canEdit = $foundUser['can_edit'];
			$this->_canAuthor = $foundUser['can_author'];
			$this->_canApprove = $foundUser['can_approve'];
			$this->_isAdmin = $foundUser['is_admin'];
			$this->_loggedIn = true;			
		}
		catch (Exception $e)
		{
			echo $e;
			return false;
		}
	}
	
	function logout() {
		$this->_username = '';
		$this->_email = '';
		$this->_photo = '';
		$this->_loggedIn = false;
	}

	function loggedIn() {
		return $this->_loggedIn;
	}
	function iduser() {
		return $this->_iduser;
	}
	function username() {
		return $this->_username;
	}
	function email() {
		return $this->_email;
	}
	function photo() {
		return $this->_photo;
	}
	function canAuthor() {
		return $this->_canAuthor;
	}
	private function attribs() {
		return array(
		    'regGivenName',
		    'regFamilyName'
		);
	}
}

?>

