
    <!-- Header Area Start Here -->
    <header>
        <div class="service-header-area sticky scroll-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-4">
                        <div class="logo">
                            <a href="index"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Bwb.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-9 col-sm-8 col-8">
                        <div class="service-main-menu f-right">
                            <nav id="mobile-menu">
                                <?php 
                                wp_nav_menu(array(
                                    'theme_locatiion' => 'header_first_menu',
                                    'menu_id' => 'header_first_menu',
                                    'menu_class' => 'sub-menu'
                                ));
                                ?>
                            </nav>
                        </div>
                        <div class="mobile-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
 
    <!-- Header Area End Here -->
