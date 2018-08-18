<?php
// Initialize the session, allows me to track if user is logged in
session_start();
require 'classes/user.php';

$imageDirectory = "";

// If this comes with a login id then try to login the user
if (isset($_POST['registerUsername'])) {
	//Login attempt
	$user = new User();
	$user->register($_POST);
}

if (isset($_POST['loginUsername'])) {
	//Login attempt
	$user = new User();
	$user->login($_POST['loginUsername'], $_POST['loginPassword']);
}

// Check the query string for additional action to take
if (isset($_SERVER['QUERY_STRING'])) {
	parse_str($_SERVER['QUERY_STRING'], $query);
	
	// If a logout request has come in, clear the session information to wipe the login
	if( isset($query['logout'])){
		session_unset();
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Attention in class</title>
    <!-- Material Icon CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome Icon CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <!-- Your custom styles -->
      <link rel="stylesheet" href="css/style.css">
          <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
      main {
        flex: 1 0 auto;
      }
    </style>
  </head>
  <body>
      <?php require 'pages/common/header.php'	?>  
      <main class="container">
        <?php include 'pages/common/contribute.php'	?>  
    </main>

<?php require 'pages/common/footer.php'; ?>  
<?php require 'pages/modal/login.php'; ?>
<?php require 'pages/modal/register.php'; ?>
  
    <!-- Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="javascript/main.js"></script>
  </body>
</html>