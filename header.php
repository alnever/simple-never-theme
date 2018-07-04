<!DOCTYPE html>
<html>
    <head>
        <!-- meta tags -->
        <meta charset="<?php _e(bloginfo('charset')); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Alex Neverov" />
        <meta name="description" content="Simpe Worpress Theme for a Personal Blog" />

        <!-- styles -->
        <link rel="stylesheet" id="main-style-sheet" href="<?php _e(bloginfo('stylesheet_url')); ?>" type="text/css" />
        
        <!-- title -->
        <title><?php wp_title(); ?><?php _e(bloginfo('name')); ?></title>

        <!-- wp_head hook -->
        <?php wp_head(); ?>

        <!-- scripts -->
        <script id="simple-never-script" src="<?php _e(bloginfo('template_url')); ?>/js/simple-never-theme.js"></script>
    </head>
<body> <!-- must be closed in footer.php -->
    <div class="wrapper"> <!-- must be closed in footer.php -->
        <!-- page header -->
        <div class="header">
            <div class="title">
                <a href="<?php _e(bloginfo('wpurl')); ?>" title="<?php _e(bloginfo('title')); ?>">
                    <?php _e(bloginfo('title')); ?>
                </a>
            </div>
            <div class="description">
                <?php _e(bloginfo('description')); ?>
            </div>
        </div>
        <div class="header_menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
        
    



