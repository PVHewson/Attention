<?php
require_once 'classes/db.php';

class Article {
	private $_idarticle;
	private $_summary;
	private $_body;
	private $_photo;
	private $_author;
	private $_created;
	private $_editor;
	private $_modified;
	private $_approver;
	private static $_dbTable = 'tbl_article';
	
	function __construct($data, User $user) {
		if (isset($data)){
			$this->_idarticle = $data['id_article'];
			$this->_summary = $data['summary'];
			$this->_body = $data['body'];
			$this->_photo = $data['photo'];
			if (isset($data['idarticle'])){
				$this->_author = $data['author'];
				$this->_created = $data['created'];				
			} else {
				$this->_author = $user->iduser();
				$this->_created = date('Y-m-d H:i:s');
			}
		}
	}
	
	// Save
	function save() {		
		$db = New DbConnect();
		
		if (!isset($this->_idarticle)){
			$attributes = array (
			  'summary',
			  'body',
			  'photo',  
			  'author',
			  'created'
			);
			$values = array (
			  "'" . $this->_summary . "'",
			  "'" . $this->_body . "'",
			  "'" . $this->_photo . "'",
			  "'" . $this->_author . "'",
			  "'" . $this->_created . "'"
			);

			$insert = $db->insert(Article::$_dbTable, $attributes, $values);
			if($insert){
				$this->_idarticle = $insert;
				return true;
			}			
		}
	}
	
	function id() {
		return $this->_idarticle;
	}
	function summary() {
		return $this->_summary;
	}
	function body() {
		return $this->_body;
	}
	function photo() {
		return $this->_photo;
	}
	// Approve
	
	// Search
	static function search() {		
		$db = New DbConnect();
		$found = array();
		
		foreach ($db->readAll(Article::$_dbTable, 'TRUE', '', '') as $data) {
			array_push($found, new Article($data, new User));
		}
		
		return $found;
	}
	
}
?>
