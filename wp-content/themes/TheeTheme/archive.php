<div class="container blog-page">
    <div class="row">
        <?php thee_get_sidebar('-blog'); ?>
        <section class="posts col-12 offset-lg-1 col-lg-8">
            <?php
            $cat = strtolower(single_cat_title( '', false ));
            $args = array(
                'post_type' => array('post','safety-awards'),
                'posts_per_page' => -1,
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => array( $cat ),
                    ),
                    array(
                        'taxonomy' => 'categories',
                        'field'    => 'slug',
                        'terms'    => array( $cat )
                    ),
                ),
            );
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