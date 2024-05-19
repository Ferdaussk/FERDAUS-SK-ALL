<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/css/bootstrap.min.css">
    <title>FERDAUS PHP</title>
    <style>
        /*  */
    </style>
</head>
<body>
<?php
/**
 * The php code socurce link
 * https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php
 */
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

include_once 'database.php';

// Attempt select query execution
$sql = "SELECT * FROM person_name";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped table-dark text-center'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>E-mail</th>";
                echo "<th>Phone</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</body>
</html>