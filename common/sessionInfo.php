<?php
require 'classes/user.php';

// Initialize the session, allows me to track if user is logged in
session_start();

if (isset($_SESSION['user'])){
	$user = $_SESSION['user'];
} else {
	$user = $_SESSION['user'] = new User();
}

?>
