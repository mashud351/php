<?php 

$firstname = isset($_GET['firstname']) ? $_GET['firstname'] : '';
$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$pwd = isset($_GET['pwd']) ? $_GET['pwd'] : '';

if (isset($_GET['submit'])) {
	echo "the form has been submitted";
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

	<form action="index.php" method="GET">
		<input type="text" name="firstname" id=""> <br>
		<input type="text" name="lastname" id=""> <br>
		<input type="email" name="email" id=""> <br>
		<input type="password" name="pwd" id=""> <br>
		<input type="submit" name="submit" value="Submit"> <br>
	</form>

	<br>
	First Name : <?php echo $firstname; ?> <br>
	Last Name :<?php echo $lastname; ?> <br>
	Email Address :<?php echo $email; ?> <br>
	Password :<?php echo $pwd; ?> <br>
</body>
</html>