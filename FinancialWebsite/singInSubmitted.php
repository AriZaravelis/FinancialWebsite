<?php
$username = $_POST["username"];
$password = $_POST["password"];
		

$db = mysqli_connect("localhost","root","7698frza","financialdb");
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $query);
	
if(mysqli_num_rows($results)) {
	header('location: home.php');
}
else {
	header('location: signIn.php');
}	
?>