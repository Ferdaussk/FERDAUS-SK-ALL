<?php
	// Connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chatgpt_database";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Insert data into database
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
	if ($conn->query($sql) === TRUE) {
		header("index.php");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>
