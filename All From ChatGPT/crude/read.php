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

	// Select data from database
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td><a href='update.php?id=" . $row["id"] . "'>Update</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
		}
	}
	$conn->close();
?>
