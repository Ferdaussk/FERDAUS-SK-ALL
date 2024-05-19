<?php include 'Common/header.php'; ?>
<div class="container text-center mt-5">



<h1 class="text-success">This is an Home page</h1> <br/>

    <?php
    if (isset($_SESSION['login'])){
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    ?>



<div class="row mt-5 mb-5">
    <!-- First col -->
    <div class="col-4 box-here">
            <i style="color: #2c3e50;" class="far fa-user-circle fa-5x mb-2"></i>
            <div class="title"><h3>JHONE DONE</h3></div>
            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti architecto vero fuga, iusto eveniet aspernatur nesciunt qui amet corrupti cupiditate quidem reiciendis, delectus inventore, asperiores dolorum aliquid.</div>
            <input type="button" value="Submit" class="btn button_here mt-3">
    </div>
    <!-- Second col -->
    <div class="col-4 box-here">
            <i style="color: #2c3e50;" class="far fa-user-circle fa-5x mb-2"></i>
            <div class="title"><h3>JHONE DONE</h3></div>
            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti architecto vero fuga, iusto eveniet aspernatur nesciunt qui amet corrupti cupiditate quidem reiciendis, delectus inventore, asperiores dolorum aliquid.</div>
            <input type="button" value="Submit" class="btn button_here mt-3">
    </div>
    <!-- Third col -->
    <div class="col-4 box-here">
            <i style="color: #2c3e50;" class="far fa-user-circle fa-5x mb-2"></i>
            <div class="title"><h3>JHONE DONE</h3></div>
            <div class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam deleniti architecto vero fuga, iusto eveniet aspernatur nesciunt qui amet corrupti cupiditate quidem reiciendis, delectus inventore, asperiores dolorum aliquid.</div>
            <input type="button" value="Submit" class="btn button_here mt-3">
    </div>
</div>




</div>
<?php include 'Common/footer.php'; ?>