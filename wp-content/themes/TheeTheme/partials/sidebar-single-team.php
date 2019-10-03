<aside class="sidebar col-12 col-lg-3 order-first">
    <div class="sidebar-menu">
        <div class="sidebar-menu-holder">
            <?php
            $post_type = get_post_type();
            if ( $post_type )
            {
                $post_type_data = get_post_type_object( $post_type );
                $post_type_slug = $post_type_data->rewrite['slug'];
            }
            ?>
            <h4 class="sidebar-menu-header"><a href="<?php echo $post_type_slug; ?>">&laquo; Back to Team</a></h4>
            <div class="sidebar-headshot text-center">
                <?= get_the_post_thumbnail(get_the_ID(), 'timeline'); ?>
            </div>
        </div>
    </div>
</aside>