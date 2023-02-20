<!DOCTYPE html>
<html>
	
	<head>
		<title>Financial Website - Sign Up</title>
		<link href="images/logo.png" type="image" rel="shortcut icon" />
		<link href="signUpStyle.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class = "main">
			<form action="signUpSubmitted.php" method="post">
				<div class="container">
					<h1>Create Account</h1>
					<hr>
					
					<b>Username</b>
					<input type="text" placeholder="Enter Username" name="username" required>

					<b>Email</b>
					<input type="text" placeholder="Enter Email" name="email" required>

					<b>Password</b>
					<input type="password" placeholder="Enter Password" name="password" required>
					

					<div class="buttons">
						<a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
						<button type="submit" class="signupbtn">Sign Up</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>