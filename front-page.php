<?php
/**
 * @package WordPress
 */
get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

        <section class="banner">
        </section><!--/banner-->

        <div class="main-content-wrapper">
            <div class="content-wrapper">

                <main class="main" role="main">

                <div class="websites" id="web">
                    <h1>Websites</h1>
                    <?php
                    if ( get_query_var('paged') ) $paged = get_query_var('paged');  
                    if ( get_query_var('page') ) $paged = get_query_var('page');
 
                    $query = new WP_Query( array( 'post_type' => 'ipf_portfolio', 'paged' => $paged ) );
 
                    if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                        <div class="portfolio"> 
                         <a href="<?php the_permalink(); ?>">
                            <div class="border"></div>
                            <div class="portfolio-content" style="background-image:url(<?php the_field('hover_image'); ?>);">
                                <?php the_post_thumbnail(); ?>
                                <div class="content">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <h5><?php the_field('website_type'); ?></h5>
                                    <div class="line"></div>
                                    <div class="categories">
                                    <?php
                                    foreach((get_the_category()) as $category) {
                                        if ($category->cat_name != 'uncategorized') {
                                        echo ' ' . $category->name.', ';
                                    }
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                    <?php endif; ?>

                    <?php the_content(); ?>

                    <div style="clear:both;"></div>
                </div><!--websites-->
                </main><!--/main-->

            </div><!--/content-wrapper-->
        </div><!--/main-content-wrapper-->

    <?php endwhile; ?>

<?php endif; ?>

<?php if(get_field('second_parallax_photo')) { ?>
    <div class="parallax-window2" data-parallax="scroll" data-image-src="<?php the_field('second_parallax_photo'); ?>"></div>
<?php } else { ?>
    <div class="parallax-window2" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/uploads/2015/11/ParallaxPhoto2.jpg"></div>
<?php } ?>

        <div class="main-content-wrapper design">
            <div class="content-wrapper">

                <main class="main" role="main">

                    <div class="designs" id="design">
                    <h1>Designs</h1>
                    <?php
                    if ( get_query_var('paged') ) $paged = get_query_var('paged');  
                    if ( get_query_var('page') ) $paged = get_query_var('page');
 
                    $query = new WP_Query( array( 'post_type' => 'ipf_design', 'paged' => $paged ) );
 
                    if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?> 
                        <div class="portfolio"> 
                         <a href="<?php the_permalink(); ?>">
                            <div class="border"></div>
                            <div class="portfolio-content" style="background-image:url(<?php the_field('hover_image'); ?>);">
                                <?php the_post_thumbnail(); ?>
                                <div class="content">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <h5><?php the_field('website_type'); ?></h5>
                                    <div class="line"></div>
                                    <div class="categories">
                                    <?php
                                    foreach((get_the_category()) as $category) {
                                        if ($category->cat_name != 'uncategorized') {
                                        echo ' ' . $category->name.', ';
                                    }
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else : ?>
                    <?php endif; ?>

                    <?php the_content(); ?>

                    <div style="clear:both;"></div>
                    </div><!--design-->
                </main><!--/main-->
            </div><!--/content-wrapper-->
        </div><!--/main-content-wrapper-->

        <?php if(get_field('third_parallax_photo')) { ?>
            <div class="parallax-window3" data-parallax="scroll" data-image-src="<?php the_field('third_parallax_photo'); ?>">
                <div class="content-wrapper">
                    <div class="form" id="contact">
                        <?php echo do_shortcode('[gravityform id="1" title="true" description="false"]'); ?>
                    </div><!--form-->
                </div><!--content-wrapper-->
            </div><!--parallax-window3-->
        <?php } else { ?>
            <div class="parallax-window3" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/uploads/2015/11/ContactParallaxImage.jpg">
                <div class="content-wrapper">
                    <div class="form" id="contact">
                        <?php echo do_shortcode('[gravityform id="1" title="true" description="false"]'); ?>
                    </div><!--form-->
                </div><!--content-wrapper-->
            </div><!--parallax-window3-->
        <?php } ?>

        <div class="bio" id="about">
            <div class="content-wrapper">
                <div class="left">
                    <img src="<?php the_field('bio_picture'); ?>" alt="Katie Montella">
                </div><!--left-->

                <div class="right">
                    <?php the_field('bio_content'); ?>

                    <div class="bottom">
                        <a href="<?php the_field('resume'); ?>" class="button" target="_blank">
                            <p>Download Resume</p>
                        </a>
                        <div class="social">
                            <a href="<?php the_field('facebook_link'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/Facebook.png" alt="Facebook"></a>
                            <a href="<?php the_field('linkedin_link'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/LinkedIn.png" alt="LinkedIn"></a>
                        </div><!--social-->
                    </div><!--button-->
                </div><!--right-->
            </div><!--content-wrapper-->
        </div><!--bio-->

<?php get_footer(); ?>