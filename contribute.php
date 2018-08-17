<?php
// Receive a new submission
// Validate submission
// Add it to the database
// Return result
$files = $_FILES;
$post = $_POST;
echo ('Thanks, ' . $post["fullname"] . '. Your contribution has been accepted.  Success !!!');
?>