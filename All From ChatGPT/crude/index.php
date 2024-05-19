<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD App</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>FERDAUS SK</h1>
	<h2>Create</h2>
	<form action="create.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" name="name" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>
		<label for="phone">Phone:</label>
		<input type="text" name="phone"><br><br>
		<button type="submit">Create</button>
	</form>
	<h2>Read</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Actions</th>
		</tr>
		<?php include 'read.php'; ?>
	</table>
</body>
</html>
