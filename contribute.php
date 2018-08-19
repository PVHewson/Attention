<?php
// Declare all the classes used to store sesseion details
require 'common/sessionInfo.php';
require 'classes/Article.php';

// Receive a new article submission
// Validate the article and its image (if given)
// Add the article to the database and stroe the image with the new article's id
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
$uploadOk = 1;
$imageFileType = '';
$post = $_POST;

if (count($files) > 0) {
//	$files[0]->saveAs($model->signature_filepath);
	$target_dir = "uploads/";
	$imageFileType = strtolower(pathinfo(basename($files['photo']['name']),PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	    $check = getimagesize($_FILES["photo"]["tmp_name"]);
	    if($check == false) {
		echo "File is not an image.";
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
}


// Check if $uploadOk is set to 0 by an error
if (count($files) > 0 && $uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // if everything is ok with the file, save the article and upload file
    $post['photo'] = $imageFileType;	

    $article = new Article($post, $user);
    if($article->save()) {
        if (count($files) > 0) {
		$target_file = $target_dir . $article->id() . '.' . $imageFileType;
		move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        }
	echo ('Thanks, ' . $user->username() . '. Your contribution has been accepted.<br/><br/>It will appear as soon as it has been approved by a moderator.');    	    	    
    } else {
        echo "Sorry, there was an error uploading your article.";
    }
}



?>