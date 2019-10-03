<div class="row team-holder">
    <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'team',
            'order' => 'ASC',
            'orderby' => 'menu_order'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
    ?>
                <div class="col-12 col-md-6 col-lg-4 styled-block" data-url="<?= get_the_permalink(); ?>">
                    <div class="styled-block-content">
                        <div class="styled-block-content-holder">
                            <div class="styled-block-image" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(), $size = 'logo-area'); ?>);">
                            </div>
                            <div class="content-holder">
                                <h3 class="name"><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                                <p class="position"><?= get_field('title'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        }
    ?>
</div>