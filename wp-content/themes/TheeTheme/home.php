<div class="container blog-page">
    <div class="row">
        <?php thee_get_sidebar('-blog'); ?>
        <section class="posts col-12 offset-lg-1 col-lg-8">
            <?php
            if($_GET['filter'] === 'news') {
                $args = array(
                    'post_type' => array('post'),
                    'posts_per_page' => -1
                );
            } else if($_GET['filter'] === 'awards') {
                $args = array(
                    'post_type' => array('safety-awards'),
                    'posts_per_page' => -1
                );
            } else {
                $args = array(
                    'post_type' => array('post', 'safety-awards'),
                    'posts_per_page' => -1
                );
            }
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    <?php thee_get_template_part('partials', 'loop-post'); ?>
                    <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            }
            ?>
        </section>
    </div>
</div>