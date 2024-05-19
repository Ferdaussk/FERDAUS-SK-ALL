<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$conn->query("INSERT INTO members (username, password, firstname, lastname, gender, image) VALUES ('$username', '$password', '$firstname', '$lastname', '$gender', 'images/No_Photo_Available.jpg')");	
?>
<script>
	alert('Sign UP Success Please Login Your Account');
	window.location = 'index.php';
</script>
</body>
</html>