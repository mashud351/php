<?php 

	if (isset($_POST['send'])) {
		
		$fullname = $_POST['fullname'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$msg = $_POST['msg'];

		$error = array();

		if ($fullname == NULL ) {
			$error['fullname'] = 'Full Name is missing';
		}
		if ($subject == NULL ) {
			$error['subject'] = 'Subject is missing';
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
			$error['email'] = 'Email Address is not valid';
		}
		if ($msg == NULL ) {
			$error['msg'] = 'Message is missing';
		}
		
		if (count($error) == 0) {

			mail('meaker351@gmail.com', $subject, $msg );
			
			echo "The form has been submitted";
		}


	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="fullname" id=""> <br>
		<?php if (isset($error['fullname'])) {
			echo $error['fullname'] = 'Full Name is missing';
		} ?> <br>
		<input type="text" name="subject" id=""> <br>
		<?php if (isset($error['subject'])) {
			echo $error['subject'] = 'Subject is missing';
		} ?> <br>
		<input type="email" name="email" id=""> <br>
		<?php if (isset($error['email'])) {
			echo $error['email'] = 'Email is not valid';
		} ?> <br>
		<textarea name="msg" id="" cols="30" rows="10"></textarea> <br>
		<?php if (isset($error['msg'])) {
			echo $error['msg'] = 'Messages is missing';
		} ?> <br>
		<input type="submit" name="send" value="Send">
	</form>
</body>
</html>