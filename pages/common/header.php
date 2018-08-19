<header>
	<div class="navbar-fixed">
		<nav class="blue">
		<div class="nav-wrapper">
			<div class="containerx">
				<a href="#" class="brand-logo center">
					CM Template
				</a>
				<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="left hide-on-med-and-down">
					<li><a href="#">Option 1</a></li>
					<li><a href="#">Option 2</a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
<?php if ($user->loggedIn()){
	echo '<li><a href="?logout" id="aLogout">Logout</a></li>
		<li><a href="#"><span class="new badge" data-badge-caption="'. $user->username() .'"></span></a></li>';
} else {
	echo '<li><a href="#modalLogin" class="modal-trigger">Login</a></li><li><a href="#modalRegister" class="modal-trigger">Register</a></li>';
}	?>
				</ul>
				<ul class="sidenav" id="mobile-menu">
					<li>
						<div class="user-view">
							<div class="background">
							</div>
							<?php 
							$photo = $user->photo();
							if ($photo != '') {
								echo "<a href='#!user'><img class='circle' src='$photo' alt='User Image Sidenav'></a>";	
							} ?>
							<a href="#!name"><span class="blue-text name">
								<?php echo $user->username() ?></span>
							</a>
							<a href="#!email"><span class="blue-text email">
								<?php echo $user->email() ?></span>
							</a>
						</div>
					</li>
					<li><a href="#">Option 1</a></li>
					<li><a href="#">Option 2</a></li>
<?php if ($user->loggedIn()){
		echo '<li><a href="?logout" id="aSNLogout">Logout</a></li>';
	} else {
		echo '<li><a href="#modalLogin" class="modal-trigger">Login</a></li><li><a href="#modalRegister">Register</a></li>';
	}
?>				
					
				</ul>
			</div>
		</div>
	</nav>			
	</div>


<section class="hide-on-small-only">
	<div class="parallax-container">
		<div class="parallax">
			<img src="img\Lion.jpg" alt="" class="responsive-img">
		</div>
	</div>
</section> 
</header>	
<section class="container">
	<h1>The CM Sample Site</h1>
	<p>This is a site for ....</p>
</section>