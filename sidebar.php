<!-- begin of the sidebar -->
<div class="sidebar">
    <div class="personal">
    </div>
    
    <!--
    <ul class="part">
        <h3><?php _e("Archives", 'simple-never-theme'); ?></h3>
        <?php wp_get_archives(); ?>
    </ul>
    
    <ul class="part">
        <?php wp_list_categories(['orderby' => 'name', 
                                  'title_li' => '<h3>'.__('Categories', 'simple-never-theme').'</h3>', 
                                  'depth' => 1,
                                  'hide_title_if_empty' => true,
                                  'hide_empty' => true
                                 ]); 
        ?>
    </ul>
    -->
    <div>
        <?php dynamic_sidebar("left_sidebar"); ?>
    </div>
</div>
<!-- end of the sidebar -->