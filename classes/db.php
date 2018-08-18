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
	
	function fetch($query) {
		$sql = "SELECT id_user, family_name, given_name, username FROM tbl_user";
		$result = $this->_conn->query($sql);
		
		$records = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				array_push($records, $row);
			}
		}
		return $records;		
	}
}

// Create connection
// Check connection

$db = New DbConnect();
$users = $db->fetch("SELECT id_user, family_name, given_name, username FROM tbl_user");
$db->close();

foreach($users as $row) {
	echo "id: " . $row["id_user"]. " - Name: " . $row["family_name"]. ", " . $row["given_name"]. "    " . $row["username"] . "<br>";
}
?>
