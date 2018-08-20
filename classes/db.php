<?php
class DbConnect {
	private $_servername = "localhost";
	private $_username = "paul";
	private $_password = "password";
	private $_dbname = "attention";
	private $_conn;

	function __construct() {
		if (func_num_args() == 1) {
			$args = func_get_args();
			$this->_dbname = $args[0];
		}
		$this->_conn = new mysqli($this->_servername, $this->_username, $this->_password, $this->_dbname);

		if ($this->_conn->connect_error) {
			die("Connection failed: " . $this->_conn->connect_error);
		} 
	}		
	
	function close() {
		$this->_conn->close();
	}
	
	function readAll($table, $query, $attribute, $value) {
		$strFilter = $query ? $query : "$attribute = $value";
		
		$sql = "SELECT * FROM $table WHERE $strFilter";
		$result = $this->_conn->query($sql);
		
		$records = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				array_push($records, $row);
			}
		}
		return $records;		
	}

	function query($query) {
		$result = $this->_conn->query($query);
		
		$records = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				array_push($records, $row);
			}
		}
		return $records;		
	}

	function insert($table, $attributes, $values) {
  	  try {
		if (count($attributes) != count($values)){
			throw new Exception('$attributes count does not match $values count');
		}
		
		$strAttributes = implode(', ', $attributes);
		$strValues = implode(', ', $values);
		$sql = "INSERT into $table ($strAttributes) VALUES ($strValues)";
		
		if ($this->_conn->query($sql) === TRUE) {
			$last_id = $this->_conn->insert_id;
			return $last_id;
		} else {
			return false;
		}		
			
	  } 
	  ////catch exception
	  catch(Exception $e) {
		throw $e;
	  }	
	}
}

// Create connection
// Check connection

//$db = New DbConnect();
//$users = $db->fetch("SELECT id_user, family_name, given_name, username FROM tbl_user");
///$db->close();

//foreach($users as $row) {
//	echo "id: " . $row["id_user"]. " - Name: " . $row["family_name"]. ", " . $row["given_name"]. "    " . $row["username"] . "<br>";
//}
?>
