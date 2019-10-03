<div class="row team-holder masonry">
    <?php
        $args = array(
            'post_type' => 'jobs'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
    ?>
                <div class="col-12 col-md-6 styled-block masonry-content masonry-sizer">
                    <div class="styled-block-content" data-url="<?= get_the_permalink(); ?>">
                        <div class="styled-block-content-holder">
                            <div class="content-holder content-holder-full">
                                <h3 class="name"><?= get_the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
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