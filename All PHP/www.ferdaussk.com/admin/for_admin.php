<?php include 'Common/header.php';?>

<div class="container">
<h2 class="text-left mt-5">Add Admin</h2> </br>

    <?php 
        if(isset($_SESSION['add'])){
            echo $_SESSION['add']; // For add the message
            unset($_SESSION['add']); // For removing the message
        }
    ?>

<form method="POST" action="for_admin.php">
    <label class="mt-2">Full Name</label> </br>
    <input class="mt-2" name="admin_full_name" type="text" placeholder=" Type your name.."> </br>
    <label class="mt-2">Username</label> </br>
    <input class="mt-2" name="admin_user_name" type="text" placeholder=" Type your uaername.."> </br>
    <label class="mt-2">Password</label> </br>
    <input class="mt-2" name="admin_password" type="password" placeholder=" Type your password.."> </br>
    <input class="btn mt-3 managecategory" type="submit" value="Add Admin" name="save">
</form>

<a href="http://"></a>

</div>

<?php include 'Common/footer.php';?>


<?php 
if(isset($_POST['save'])=='submit'){
    // Get the data from admin form
    $full_name = $_POST['admin_full_name'];
    $username = $_POST['admin_user_name'];
    $password_admin = $_POST['admin_password'];

    // SQL Query to save the data into database
    $sql = "INSERT INTO tbl_admin_ferdaus SET
    full_name = '$full_name',
    username = '$username',
    password = '$password_admin'
    ";
    
    $res = mysqli_query($conn, $sql) or die('Database error.');

    // Chech whether
    if($res){
        $_SESSION['add'] = "<div class='successmsg text-success'>Admin successfully added.</div>";
        //  Redirect page
        // echo "Ferdaus";
        header("location:". SITEURL. 'admin/home_admin.php');
    } else{
        $_SESSION['add'] = "<div class='successmsg text-success'>Admin not added.</div>";
        //  Redirect page
        // echo "Khan";
        header("location:". SITEURL. 'admin/home_admin.php');
    }
    

}

?>
