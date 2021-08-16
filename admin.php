<?php 

session_start();
if (!isset($_SESSION['success'])) {
	
	header('location: index.php');
}



 ?>
 <a href="logout.php">Logout</a>

<h3>welcome to my admin panel</h3>