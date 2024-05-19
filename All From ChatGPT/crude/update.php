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

	// Update data in database
	$id = $_GET['id'];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
		if ($conn->query($sql) === TRUE) {
			header("index.php");
		} else {
			echo "Error updating record: " . $conn->error;
		}
	}
	$sql = "SELECT * FROM users WHERE id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
	}
	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD App - Update</title>
</head>
<body>
	<h1>PHP CRUD App - Update</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $id;?>" method="POST">
		<label for="name">Name:</label>
		<input type="text" name="name" value="<?php echo $name;?>" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" value="<?php echo $email;?>" required><br><br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone" value="<?php echo $phone;?>"><br><br>
		<button type="submit">Update</button>
	</form>
</body>
</html>
