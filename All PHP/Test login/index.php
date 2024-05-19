<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>NTMD</title>
  </head>
  <body>
  <form action = "" method ="POST"></form>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/itdd.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>NTMD Tools/Equipment Monitoring</h3>
              <p class="mb-4">Sign In</p>
            </div>
            <form action = "" method ="POST">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" required>
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" required>
              </div>
                <!-- <input type="submit" value="Log In"  class="btn btn-block btn-primary">  -->
                <button type="submit" name="login" value="login">Log In</button>
              </form>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database_name = "ferdausltd";
$conn = new mysqli($servername, $username, $password,$database_name);
// $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } 
 $sql = "SELECT id, username, password FROM login_ferdaussk";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row THIS IS WHERE YOU PRINT EACH ROW FROM THE QUERY 
// while($row = $result->fetch_assoc(['username'])) {
//     // echo "id:-" . $row["id"]. " -> Name: -" . $row["username"]. " Password:- " . $row["password"]. "<br>";
//     echo $row['username'];
//   }
// $roww = $result->fetch_assoc();
// echo $roww['username'] ." ". $roww['password'];

    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      // $name = 'ferdaussk';
      // $password2 = 'ferdaussk';
      $roww = $result->fetch_assoc();
      $name = $roww['username'];
      $password2 = $roww['password'];
      // echo $roww['username'] ." ". $roww['password'];
      echo $password2;
      
      if($username == $name && $password == $password2){
          echo 'Success';
      } else{
          echo 'No';
      }
    }

 } else {
 echo "0 results";
}
$conn->close();
?>
<br> 
<?php

echo 'Its working perfectly. Which is uncomment.';

// $query = "SELECT * FROM `accounts`";
// $result = $mysqli->query($sql);
// while($row = $result->fetch_assoc()) {
//     if ($row["id"] == 2) {
//         echo $row["username"];
//     }
// $mysqli->close();
//   }

// $conn = new mysqli($servername, $username, $password,$database_name);
// $the_username_in = "ferdaussk";
// $the_userpass_in = "ferdaussk01";

// $form_name = $_POST('username');
// $form_password= $_POST('password');

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>