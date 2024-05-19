<?php 
/**
* Template Name: Blog page
*/
the_post();
get_header(); 
?>

<!-- Here have all header and menu section. location another-navigation.php -->
<?php get_template_part("templates/common/another-navigation"); ?>


    <!-- Hero Area Start Here -->
    <section class="service-main-area hero-bg">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-12">
                    <div class="service-main-content text-center">
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End Here -->
    <section class="blog-body-area">
        <div class="container-fluid">
            <?php 

            get_template_part("templates/blog-post/common-blog", get_post_format()); 

            ?>
            <div class="row">
                <div class="col-xl-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            
                            <?php
                                bestwpdevelopertd_blog_pagination();                                
                            ?>
                            <!-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li> -->
                         </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>
