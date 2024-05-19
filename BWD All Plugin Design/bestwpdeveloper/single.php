<?php 
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
                    <div class="service-main-content blog-heading text-center">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End Here -->
    <section class="blog-body">
        <div class="container">
            <div class="row pt-100">
                <div class="col-xl-12">
                    <div class="blog-title">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="blog-meta">
                        <span><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="user"><i class="fas fa-user"></i><?php echo _e(' by '); echo get_the_author(); ?></a></span>
                        <span><a href=""><i class="far fa-calendar-alt"></i><?php echo _e(' on '); the_date('j-F-Y'); ?></a></span>
                        <span><a href=""><i class="fas fa-comment"></i> <?php echo _e("Comments", "bestwpdevelopertd"); ?></a></span>
                    </div>
                    <div class="blog-content">

                        <!-- Have content here -->
                        <?php the_content(); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="share-post-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="share-post text-center">
                        <h4>Share :</h4>
                        <span><a href="https://www.facebook.com/sharer?u=&lt;?php the_permalink();?&gt;&amp;t=&lt;?php the_title(); ?&gt;" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></span>
                        <span><a id="tweetShare" href="https://twitter.com/share?url="+encodeURIComponent(document.URL); target="_blank"><i class="fab fa-twitter"></i></a></span>
                        <span><a href=""><i class="fab fa-linkedin-in"></i></a></span>
                        <span><a href=""><i class="fab fa-pinterest-p"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="previous-next-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="previous-next-btn">
                        <a href="" class="previous-post">Previous Post</a>
                        <a href="" class="next-post f-right">Next Post</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comment-area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="content">
                        <!-- <h3>Leave A Comment</h3> -->
                        <form action="">
                            <!-- <textarea name="" id="" cols="120" rows="8"></textarea>
                            <input type="text" name="name" id="" placeholder="Name" required>
                            <input type="email" name="email" id="" placeholder="Email" required>
                            <input type="url" name="link" id="" placeholder="Website Link" required>
                            <input type="submit" class="button" value="Send Comment"> -->
                            
                            <!-- Comment form dynamic -->
                            <?php 
                                // If comments are open or there is at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
