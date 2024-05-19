<?php include_once 'Common/header.php'; ?>

    <div class="container mt-5">

        <h1 class="mt-4">Log-In Page</h1> <br/>

        <?php
            if (isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>

        <form method="POST" action="">
            <label class="mt-2">Username</label> </br>
            <input class="mt-2" name="loginusername" type="text" placeholder=" Username.."> </br>
            <label class="mt-2">Password</label> </br>
            <input class="mt-2" name="login_password" type="password" placeholder=" Type password.."> </br>
            <input class="btn mt-3 managecategory" type="submit" value="Log-In" name="loginbtn">
        </form>
        <p class="mt-4">Registar a new account <a href="registation.php">Sign-up</a></p> </br>
        <p class="authorurl">Author~ <a href="http://www.facebook.com/ferdausskkhan/">FERDAUS SK</a></p> </br>
        <p class="authorurl">Video~ <a href="https://www.youtube.com/watch?v=ZBgTzx46B8s&list=PLBLPjjQlnVXXBheMQrkv3UROskC0K1ctW"><i class="fa fa-video"></i></a></p> </br>
    </div>

<?php include 'Common/footer.php'; ?>



<?php

if (isset($_POST['loginbtn'])){
//    Get the data from log in form
    $username = $_POST['loginusername'];
    $passsword = $_POST['login_password'];

//    SQL to ckeck whether
    $sql = "SELECT * FROM tbl_admin_login WHERE userame='$username' AND password='$passsword'";

//    Execute the query
    $res = mysqli_query($conn, $sql);

//    Count rows
    $count = mysqli_num_rows($res); // 24m wrong
    if ($count == 1){
          $_SESSION['login'] = "<div class='success'>Log-in successfully.</div>";
          header('location: '.SITEURL. 'admin/');
    } else{
          $_SESSION['login'] = "<div class='error'>Username and password are not match.</div>";
          header('location: '.SITEURL. 'admin/login.php');
    }


}



?>
