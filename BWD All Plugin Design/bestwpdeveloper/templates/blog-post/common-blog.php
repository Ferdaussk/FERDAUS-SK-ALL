
            <div class="row pt-100 pb-70">
                <?php 
                $wp_query = new WP_Query(array('post_per_page'=>-1));
                    if(have_posts()) :
                        while(have_posts()) : the_post();
                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="blog-item">
                                    <div class="blog-date-category">
                                        <span class="f-left"><a href="<?php the_author_meta(); ?>"><i class="far fa-calendar-alt"></i><?php echo _e(' on '); the_time('j-F-Y'); ?></a></span>
                                        <span class="f-right cate"><a href="<?php the_permalink(); ?>"><?php echo get_cat_name( $category_id = 3 ); ?></a></span> <!-- echo get_cat_name( $category_id = 3 ); /// single_cat_title(); -->
                                    </div>
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                    <div class="blog-title">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    </div>
                                    <div class="blog-description">
                                        <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="f-left"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><i class="fas fa-user"></i> <?php echo get_the_author(); ?></a></span>
                                        <span class="f-right"><a href="<?php the_author_meta(); ?>"><i class="fas fa-comment"></i> <?php echo _e('Comment', 'bestwpdevelopertd'); ?></a></span>
                                    </div>
                                    <div class="button read-btn">
                                        <a href="<?php the_permalink(); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endwhile;
                    endif
            ?>
            </div>
           