<!-- A floating action button - these are cool! -->
<div class="fixed-action-btn">
	<a class="waves-effect waves-light btn modal-trigger btn-floating btn-large indigo darken-2 tooltipped" 
	   data-position="top" 
	   data-tooltip="<?php 
		if (!$user->loggedIn()) {
			echo 'Login to contribute an article';
		} else if ( $user->canAuthor()){ 
		     echo 'Contribute an article';
		} else {
		     echo 'Ask for Contributer access';
		}?>" 
	   href="#modalContribute">
		<i class="large material-icons">edit</i>
	</a>
</div>
<?php require 'pages/modal/contribute.php'; ?>
<script src ="javascript/contribute.js"></script>