<?php include 'Common/header.php'; ?>
<div class="container mt-5">


<?php 

if(isset($_POST['submit'])){
    // echo "Button clicked";
    $id1 = $_GET['id'];
    $full_name1 = $_POST['update_admin_full_name'];
    $username1 = $_POST['update_admin_user_name'];
    // echo $id, $full_name, $username; // I was try to see the result

    // Create a sql
    $sql1 = "UPDATE tbl_admin_login SET
    full_name = '$full_name1',
    username = '$username1'
    WHERE id = '$id1'
    ";
    // echo $sql1; die();
    // Execute the query
    $res1 = mysqli_query($conn, $sql1);

    // Check whether
    if($res1 == TRUE){
        $_SESSION['update'] = "<div class='successmsg text-success'>Admin update successfully.</div>";
        header('location:'.SITEURL.'admin/home_admin.php');
        // echo "Ferdaus.";
    } else{
        // If failed update
        $_SESSION['update'] = "<div class='successmsg text-success'>Admin update failed. Try again later</div>";
        header('location:'.SITEURL.'admin/home_admin.php');
    }
}


?>

<h1 class="mt-4">Update Admin Info</h1>
</br>
    <?php 
        // Get the ID of selected admin
        $id = $_GET['id'];
        // Create sql query to get the details
        $sql = "SELECT * FROM tbl_admin_login WHERE id=$id";
        // Execute the query
        $res = mysqli_query($conn, $sql);

        // Check whether 
        if($res == true){
            // Check the wether data
            $conn = mysqli_num_rows($res);

            // Check whether the data
            if($conn == 1){
                // echo "Ferdaus";
                $row = mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];
            } else{
                // Redirect to manage admin page
                $_SESSION['user-not-found']="User not found.";
                header('location:'.SITEURL.'admin/home_admin.php');
                // echo "One of the best name.";
            }
        }
    ?>

<form method="POST" action="">
    <label class="mt-2">Re-type Full Name</label> </br>
    <input class="mt-2" name="update_admin_full_name" type="text" placeholder=" Type your name.." value="<?php echo $full_name; ?>"> </br>
    <label class="mt-2">Re-type Username</label> </br>
    <input class="mt-2" name="update_admin_user_name" type="text" placeholder=" Type your uaername.." value="<?php echo $username; ?>"> </br>
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input class="btn mt-3 managecategory" type="submit" value="Update Admin Now" name="submit">
</form>








</div>
<?php include 'Common/footer.php'; ?>