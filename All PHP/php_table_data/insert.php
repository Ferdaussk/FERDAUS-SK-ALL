<?php
/**
 * Data insert successfully from this link
 * https://www.tutsmake.com/php-code-insert-data-into-mysql-database-from-form/
 */
include_once 'database.php';
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $sql = "INSERT INTO person_name (name,email,phone)
     VALUES ('$name','$email','$mobile')";
     if (mysqli_query($link, $sql)) {
        echo "Successfully new data uploaded !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
}
?>