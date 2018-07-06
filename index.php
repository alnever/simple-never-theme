<?php get_header(); ?>

<!-- container start -->
<div class="container">
    <?php get_sidebar(); ?>
    
    <!-- content start -->
    <div class="content">
        <!-- the cycle -->
        <?php if (have_posts()) : while(have_posts()): the_post(); ?>
            <!-- start post record -->
            <div class="entry" id="entry-<?php the_ID(); ?>">
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>
                <div class="postmetadata">
                    <p><?php _e("Author", 'simple-never-theme'); _e(": "); the_author_posts_link(); ?> <?php the_date("Y-m-d","[", "]", true) ?></p>
                </div>
            </div>
            <!-- end post -->
        <?php endwhile; ?>
        <div class="navigation">
                <p><?php posts_nav_link(); ?></p>
        </div>
        <?php endif; ?>
    </div>
    <!-- content end -->
</div>    
<!-- container end -->

<?php get_footer(); ?>