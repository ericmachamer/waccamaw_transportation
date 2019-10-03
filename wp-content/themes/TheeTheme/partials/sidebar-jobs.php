<aside class="sidebar col-12 col-lg-3 order-last order-lg-first">
    <div class="sidebar-menu">
        <div class="sidebar-menu-holder">
            <h4 class="sidebar-menu-header">Discover</h4>
            <div class="menu-holder">
                <?php echo do_shortcode('[thee_childpages]') ?>
            </div>
        </div>
    </div>
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    	<ul class="widgets">
        	<?php dynamic_sidebar("sidebar"); ?>
    	</ul>
	<?php endif; ?>
</aside>