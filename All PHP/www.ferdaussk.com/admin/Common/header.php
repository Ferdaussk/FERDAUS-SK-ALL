<?php 

// include '../../configue/constans.php';
include '../configue/constants.php';

?>
<!-- It's for header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>FOOD ORDER WEBSITE - WEB DEVELOPER FERDAUS</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="shortcut icon" href="http://example.com/favicon.ico" /> -->
    <link rel="icon" href="Logo.png" type="image/gif" sizes="16x16">
    <!-- This one cdn for the font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>

    <div class="oute">
        <div class="container">
            <div class="bgimage">

                <div class="bot row">
                    <div class="picture col-lg-3">
                        <div class="logo_here">LOGO</div>
                    </div>
                    <div class="menu col-lg-9">
                        <ul class="menuall nav navbar">
                            <li class="indmenu nav-item  p-3"><a href="index.php" class="textmenu nav-link" active>HOME</a></li>
                            <li class="indmenu nav-item  p-3"><a href="home_admin.php" class="textmenu nav-link">ADMIN</a></li>
                            <li class="indmenu nav-item  p-3"><a href="for_category.php" class="textmenu nav-link">CATEGORY</a></li>
                            <li class="indmenu nav-item  p-3"><a href="for_food.php" class="textmenu nav-link">FOOD</a></li>
                            <li class="indmenu nav-item  p-3"><a href="for_order.php" class="textmenu nav-link">ORDER</a></li>
                            <li class="indmenu nav-item  p-3"><a href="for_contact.php" class="textmenu nav-link">CONTACT</a></li>
                            <li class="indmenu nav-item  p-1 btn bg-success bordered"><a href="logout.php" class="textmenu nav-link">LOG-OUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
         </div>
        </div>


