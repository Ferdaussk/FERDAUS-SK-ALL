<?php
    //  Start the seddion
    session_start();


    // Create constant value
    define('SITEURL', 'http://localhost/From%20Vijay%20Thapa%20YouTube/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'ferdausshop');


    // Execute Query and save Data in database
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die('Database connection fail.'); // Database Connection
    $database_select = mysqli_select_db($conn, DB_NAME) or die('<h1>Database connection fail. Try again leater.</h1>'); // Selecting Database


?>