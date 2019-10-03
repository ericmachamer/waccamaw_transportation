<aside class="sidebar col-12 col-lg-3 order-last order-lg-first">
    <div class="sidebar-menu">
        <div class="sidebar-menu-holder">
            <?php
                $parents = get_post_ancestors( $post->ID );
                $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
            ?>
            <h4 class="sidebar-menu-header"><a href="<?= get_permalink($id); ?>"><?= get_the_title($id); ?></a></h4>
            <div class="menu-holder">
            <?php echo do_shortcode('[thee_childpages]') ?>
            </div>
        </div>
    </div>
    <div class="sidebar-ad">
        <?php
            $image = get_field('callout_background', 'option');
            $image = wp_get_attachment_image_src($image, 'featured-thumb-large');
            $icon = get_field('callout_icon', 'option');
            $icon = wp_get_attachment_image_src($icon, 'icons');
        ?>
        <div class="sidebar-ad-holder" style="background-image: url(<?= $image[0]; ?>);">
            <div class="icon text-center"><img src="<?= $icon[0]; ?>" alt="<?= get_field('callout_title', 'option'); ?>" /></div>
            <div class="text text-center">
                <h3><?= get_field('callout_title', 'option'); ?></h3>
                <h6><?= get_field('callout_subtitle', 'option'); ?></h6>
            </div>
            <div class="link text-center">
                <?php $link = get_field('callout_link_page', 'option'); ?>
                <a href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
            </div>
        </div>
    </div>
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    	<ul class="widgets">
        	<?php dynamic_sidebar("sidebar"); ?>
    	</ul>
	<?php endif; ?>
</aside>