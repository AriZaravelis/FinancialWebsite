<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
		

$db = mysqli_connect("localhost","root","7698frza","financialdb");
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
mysqli_query($db, $query);
		
header('location: home.php');
?>