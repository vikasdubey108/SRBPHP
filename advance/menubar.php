<a href="contact.php">Contact</a>
<a href="contact.php">About Us</a>
<a href="contact.php">Services</a>

<?php 
	session_start();

	if(isset($_SESSION['email'])){ 
		echo '<a href="profile.php">Profile</a> ';
		echo '<a href="logout.php">Logout</a> ';
	}else{
		echo '<a href="login.php">Login</a> ';
		echo '<a href="registration.php">Register</a> ';
	}
 ?>

