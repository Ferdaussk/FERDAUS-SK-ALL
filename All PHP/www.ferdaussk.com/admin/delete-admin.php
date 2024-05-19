<?php 
// Include constents.php
include '../configue/constants.php';

// Get the ID deleted to be admin
$id = $_GET['id'];
// Create a sql query to delete admin
$sql = "DELETE FROM tbl_admin_login WHERE id = $id";
// Executed the query
$res = mysqli_query($conn, $sql);


if($res == TRUE){
    // echo "Admin Deleted";

    // Create a session veriable
    $_SESSION['delete'] = "<div class='successmsg text-success'>Admin successfully deleted.</div>";
    // Redirect to manage admin page
    header('location:'. SITEURL.'admin/home_admin.php');
} else{
    // echo "Admin is not deleted";
    // Create a session veriable
    $_SESSION['delete'] = "<div class='errormsg text-warning'>Admin deleted failed. Try again later.";
    // Redirect to manage admin page
    header('location:'. SITEURL.'admin/home_admin.php');
}




// Redirect to manage admin page





?>
