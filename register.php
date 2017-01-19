<?php 
	# write your comment here

	/* 
		write your comment here
	*/
	$studentNo = "";
	$lastname = "";
	$firstname = "";
	$emailAddress = "";
	$password = "";
	$birthDate = null;

?>
<!DOCTYPE html>
<html>
	<head>
			<title>Student Registration</title>
			<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-lg-4">
								Student ID
							</label>
							<div class="col-lg-8">
								<input type="text" name="sid" 
								class="form-control" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								Last Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="lastname" 
								class="form-control" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
								First Name
							</label>
							<div class="col-lg-8">
								<input type="text" name="firstname" 
								class="form-control" required/>
							</div>
						</div><div class="form-group">
							<label class="control-label col-lg-4">
								Email Address
							</label>
							<div class="col-lg-8">
								<input type="text" name="emailaddress" 
								class="form-control" required/>
							</div>
						</div><div class="form-group">
							<label class="control-label col-lg-4">
								Password
							</label>
							<div class="col-lg-8">
								<input type="password" name="password" 
								class="form-control" required/>
							</div>
						</div><div class="form-group">
							<label class="control-label col-lg-4">
								Birthdate
							</label>
							<div class="col-lg-8">
								<input type="date" name="birthdate" 
								class="form-control" required/>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-lg-offset-4 col-lg-8">
								<button name="register"
								class="btn btn-success">
								Register
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>