<?php 

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'Mashud';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : 'Rana';
$email = isset($_POST['email']) ? $_POST['email'] : 'meaker351@gmail.com';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '123456';

if (isset($_POST['submit'])) {
	$success =  "the form has been submitted";
}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>

	<form action="index.php" method="POST">
		<input type="text" name="firstname" id=""> <br>
		<input type="text" name="lastname" id=""> <br>
		<input type="email" name="email" id=""> <br>
		<input type="password" name="pwd" id=""> <br>
		<input type="submit" name="submit" value="Submit"> <br>
	</form>
	<p><?php if (isset($success)) {
		echo $success;
	} ?></p>
	<br>
	First Name : <?php echo $firstname; ?> <br>
	Last Name :<?php echo $lastname; ?> <br>
	Email Address :<?php echo $email; ?> <br>
	Password :<?php echo $pwd; ?> <br>
</body>
</html>