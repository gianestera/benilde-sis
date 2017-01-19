<?php
	if (isset($_POST['register']))
	{
			$studentNo = $_POST['sid'];
			$lastname = $_POST['lastname'];
			$firstname = $_POST['firstname'];
			$emailAddress = $_POST['emailaddress'];
			$password = $_POST['password'];
			$birthDate = $_POST['birthdate'];

			echo "Welcome, " . $firstname .
				" " . $lastname . "!<br/>".
				'Your ID number is '.$studentNo.
				'.<br/>
				Your email address is '.$emailAddress.
				'.<br/>
				Your password is '.$password.
				'.<br/>
				Your birthday is '.$birthDate.
				'.<br/><br/>
				The time is ' . date('c');
	}
	else
	{
		header('location: register.php');
	}

?>
<!DOCTYPE html>
<html>
	<head>
			<title>Student Registration</title>
			<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>





	</body>
</html>