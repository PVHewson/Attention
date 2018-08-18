<header>
	<nav class="blue">
		<div class="nav-wrapper">
			<div class="container">
				<a href="#" class="brand-logo">
					Attension
				</a>
				<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Teachers</a></li>
					<li><a href="#">Students</a></li>
<?php if (isset($_SESSION['user'])){
	echo '<li><a href="?logout" id="aLogout">Logout</a></li>
		<li><a href="#"><span class="new badge" data-badge-caption="'. $_SESSION['user']['name'].'"></span></a></li>';
} else {
	echo '<li><a href="#modalLogin" class="modal-trigger">Login</a></li><li><a href="#modalRegister" class="modal-trigger">Register</a></li>';
}	?>
				</ul>
				<ul class="sidenav" id="mobile-menu">
					<li>
						<div class="user-view">
							<div class="background">
							</div>
							<a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt="User Image Sidenav"></a>
							<a href="#!name"><span class="blue-text name">
								<?php echo isset($_SESSION['user'])? $_SESSION['user']['name'] : '' ?></span>
							</a>
							<a href="#!email"><span class="blue-text email">
								<?php echo isset($_SESSION['user'])? $_SESSION['user']['email'] : '' ?></span>
							</a>
						</div>
					</li>
					<li><a href="#">Teachers</a></li>
					<li><a href="#">Students</a></li>
<?php if (isset($_SESSION['user'])){
		echo '<li><a href="?logout" id="aSNLogout">Logout</a></li>';
	} else {
		echo '<li><a href="#modalLogin" class="modal-trigger">Login</a></li><li><a href="#modalRegister">Register</a></li>';
	}
?>				
					
				</ul>
			</div>
		</div>
	</nav>
</header>