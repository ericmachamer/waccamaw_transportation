<aside class="sidebar col-12 col-lg-3 order-last order-lg-first">
    <div class="sidebar-menu">
        <div class="sidebar-menu-holder">
            <h4 class="sidebar-menu-header">Blog Categories</h4>
            <?php
                $args = array(
                    'show_count' => false,
                    'hide_empty' => true,
                );
            $title = array (
                'title_li' => '<h3><a href="/news-events?filter=news">News</a></h3>'
            );
            if($_GET['filter'] == 'news') {
                $title = array (
                    'title_li' => '<h3><a href="/news-events?filter=awards" class="active">News</a></h3>'
                );
            }
            $args = array_merge($args, $title);
                ?>
            <div class="menu-holder">
                <ul class="child-menu">
                <?php
                    wp_list_categories($args);
                ?>
                </ul>
                <?php
                $args = array(
                    'taxonomy' => 'categories',
                    'show_count' => false,
                    'hide_empty' => true,
                );
                $title = array (
                    'title_li' => '<h3><a href="/news-events?filter=awards">Awards</a></h3>'
                );
                if($_GET['filter'] == 'awards') {
                    $title = array (
                        'title_li' => '<h3><a href="/news-events?filter=awards" class="active">Awards</a></h3>'
                    );
                }
                $args = array_merge($args, $title);
                ?>
                <ul class="child-menu">
                    <?php
                    wp_list_categories($args);
                    ?>
                </ul>
            </div>
        </div>
    </div>
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
    	<ul class="widgets">
        	<?php dynamic_sidebar("sidebar"); ?>
    	</ul>
	<?php endif; ?>
</aside>