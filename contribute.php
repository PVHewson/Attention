<?php
// Declare all the classes used to store sesseion details
require 'common/sessionInfo.php';
require 'classes/Article.php';

// Receive a new submission
// Validate submission
// Add it to the database
// Return result

if (!$user->loggedIn()){
	echo "Login required";
	return;
}
if (!$user->canAuthor()){
	echo "Unauthorised";
	return;
}
$files = $_FILES;
$post = $_POST;
$article = new Article($post, $user);

if (is_object($files)) {
	$files[0]->saveAs($model->signature_filepath);
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	    $article->save();
	    echo ('Thanks, ' . $user->username() . '. Your contribution has been accepted.  Success !!!');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>