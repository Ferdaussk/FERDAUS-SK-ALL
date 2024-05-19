<?php include 'Common/header.php'; ?>
<div class="container mt-5">

<h1 class="mt-4">Update Admin Password</h1>

    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    ?>

<form method="POST" action="">
    <label class="mt-2">Type your Current Password</label> </br>
    <input class="mt-2" name="update_admin_current_password" type="password" placeholder=" Current Password.."> </br>
    <label class="mt-2">New Password</label> </br>
    <input class="mt-2" name="update_admin_new_password" type="password" placeholder=" Type password.."> </br>
    <label class="mt-2">Re-type New Password</label> </br>
    <input class="mt-2" name="update_admin_new_password_re_type" type="password" placeholder=" Re-type password.."> </br>
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input class="btn mt-3 managecategory" type="submit" value="Update Password" name="update_password">
</form>

<?php 


if(isset($_POST['update_password'])){

//    Get the data from form
    $id = $_POST['id'];
    $update_admin_current_password = $_POST['update_admin_current_password'];
    $update_admin_new_password = $_POST['update_admin_new_password'];
    $update_admin_new_password_re_type = $_POST['update_admin_new_password_re_type'];

//    Ckeck whether the user with current ID and the current password corret or not
    $sql = "SELECT * FROM tbl_admin_login WHERE id=$id AND password = '$update_admin_current_password'";
    // echo $sql; die();



//    Execute the query
    $res = mysqli_query($conn, $sql);

//    3.Ckeck whether the new password and the confirm password mathch or not
    if($res=true){
//     Check whether data is available or not
         $count = mysqli_num_rows($res);
        if($count == 1){
            // user exists and password can be change
            if($update_admin_new_password){
                
            } else{
//          Data exists  not message
                $_SESSION['user-not-found'] = "<div class='successmsg text-success'>Admin password successfully updated.</div>";
                header('location: '.SITEURL. 'admin/home_admin.php');
            }
        }
    }
}
//      Change the password if all are same as


if(isset($_POST['update_password'])){
    echo "You are clicked on the Update Password button.";
}

?>



</div>
<?php include 'Common/footer.php'; ?>