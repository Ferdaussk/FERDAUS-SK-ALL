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

	// Delete data from database
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id='$id'";
	if ($conn->query($sql) === TRUE) {
		header("index.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>
