<?php
$host = 'localhost';
$dbName = 'contact_form_sk';
$user = 'root';
$password = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    try {
      $stmt = $pdo->prepare("INSERT INTO form_data (name, email, message) VALUES (:name, :email, :message)");

      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':message', $message);

      $stmt->execute();

      // Check if the insertion was successful
      if ($stmt->rowCount() > 0) {
        echo 'Thank you! Your message has been saved to the database.';
      } else {
        echo 'Sorry, an error occurred. Please try again later.';
      }
    } catch (PDOException $e) {
      echo 'Sorry, an error occurred. Please try again later. Error: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ferdaus sk contact form</title>
</head>
<body>
    <h1>Make Ferdaus</h1>
    
    <form method="POST" action="submit.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="message">Message:</label><br>
        <textarea name="message" id="message" rows="4" required></textarea><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
