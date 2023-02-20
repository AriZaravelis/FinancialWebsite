<!DOCTYPE html>
<html>
	
	<head>
		<title>Financial Website - Sign In</title>
		<link href="images/logo.png" type="image" rel="shortcut icon" />
		<link href="signInStyle.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class = "main">
			<form action="singInSubmitted.php" method="post">
				<div class="container">
					<h1>Sign In</h1>
				
					<b>Username</b>
					<input type="text" placeholder="Enter Username" name="username" required>

					<b>Password</b>
					<input type="password" placeholder="Enter Password" name="password" required>
					
					
					<div class="buttons">
						<a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
						<button type="submit" class="signinbtn">Sign In</button>
					</div>
					
				</div>
			</form>
		</div>
	</body>
</html>