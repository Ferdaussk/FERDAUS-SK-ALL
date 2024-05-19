<?php include 'Common/header.php'; ?>
    <div class="container">
    <h1 class="text-center mt-5 categorytitle">Manage Admin</h1> <br/>
    <!-- For add a message -->
    <?php 
        // That condition for add admin
        if(isset($_SESSION['add'])){
            echo $_SESSION['add']; // For add the message
            unset($_SESSION['add']); // For removing the message
        }
        // That condition for delete admin
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete']; // For add the message
            unset($_SESSION['delete']); // For removing the message
        }
        // That condition for change password admin
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset ($_SESSION['update']);
        }
        // That condition for change password admin
        if(isset($_SESSION['user-not-found'])){
            echo $_SESSION['user-not-found'];
            unset ($_SESSION['user-not-found']);
        }
    ?>
    </br>
    <a href="for_admin.php"><input class="btn mt-3 managecategory" type="button" value="Add Admin"></a>
    </div>
    <div class="container my-4 p-5 shadow">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <td>S.N</td>
                    <td>Full Name</td>
                    <td>Username</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Query to get all admin
                $sql = "SELECT * FROM tbl_admin_login";
                // Execute the Query
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $count = mysqli_num_rows($res);
                    // For serial number
                    $sn = 1;
                    if($count > 0){
                        // We have data in the database
                        while($rows = mysqli_fetch_assoc($res)){
                            // From database table collumn name
                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $username = $rows['username'];
                            // Display the value
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?>.</td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update_admin.php?id=<?php echo $id; ?>" class="btn btn-secondary"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="<?php echo SITEURL; ?>admin/update_password.php?id=<?php echo $id; ?>" class="btn btn-secondary"><i class="fas fa-key"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else{
                        // We don't have data in the database
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
<?php include 'Common/footer.php'; ?>