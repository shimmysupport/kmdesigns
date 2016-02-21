<?php
/**
 * @package WordPress
 */
get_header(); ?>

<div class="main-content-wrapper">
    <div class="content-wrapper">

        <main class="main" role="main">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <h1><?php the_title(); ?></h1>
                        <div class="topmeta">
                            <span class="category"><?php
                                    foreach((get_the_category()) as $category) {
                                        if ($category->cat_name != 'uncategorized') {
                                        echo ' ' . $category->name.', ';
                                    }
                                    }
                                    ?></span>
                        </div><!--/topmeta-->
                        <div class="postcontent">
                            <?php the_content(); ?>
                        </div><!--/postcontent-->

                        <?php if(get_field('portfolio_image')) { ?>
                            <img src="<?php the_field('portfolio_image'); ?>" class="portfolioimage">
                        <?php } ?>

                        <?php if(get_field('url')) { ?>
                            <a href="<?php the_field('url'); ?>" class="button" target="_blank">View Website</a>
                        <?php } ?>
                    </article>

                <?php endwhile; ?>
                
                <?php if( get_previous_posts_link() ) : ?>
                
                    <span class="pagination button alignleft"><?php previous_posts_link('&laquo; Newer Entries'); ?></span>
                
                <?php endif; ?>
                
                <?php if( get_next_posts_link() ) : ?>
                
                    <span class="pagination button alignright"><?php next_posts_link('Older Entries &raquo;'); ?></span>
                    
                <?php endif; ?>

            <?php else: ?>

                <?php get_template_part('notfound'); ?>

            <?php endif; ?>

        </main><!--/main-->

        <?php get_sidebar(); ?>

    </div><!--/content-wrapper-->
</div><!--/main-content-wrapper-->

<?php get_footer(); ?>