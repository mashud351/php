<!DOCTYPE html>
<?php 

session_start();

if(isset($_POST['login'])){

	define('NAME', 'mashud');
	define('EMAIL', 'mashud@gmail.com');

	$usr = $_POST['name'];
	$email = $_POST['email'];

	

	if ($usr == NAME && $email == EMAIL ) {

		$_SESSION['success'] = '';

		header('location: admin.php');
	}else {
		$error = "Password does not match";
	}
}



 ?>


<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to Admin Panel</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="name" id="">
		<input type="email" name="email" id="">
		<input type="submit" name="login" value="Submit">
	</form>
	<p>
	<?php 
		if (isset($error)) {
			echo $error;
		}
	?>
	</p>
</body>
</html>