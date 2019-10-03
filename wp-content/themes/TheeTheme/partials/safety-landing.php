<div class="row">
    <div class="col-12">
        <h2>Awards</h2>
    </div>
</div>
<div id="safety" class="row award-holder masonry">
    <?php
        $args = array(
            'post_type' => 'safety-awards',
            'posts_per_page' => 5
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
    ?>
                <div class="col-12 styled-block styled-block-content masonry-content masonry-sizer">
                    <div class="row styled-block-content-holder">
                        <?php
                        if(get_the_post_thumbnail()) {
                            ?>
                            <div class="col-4 post-image"
                                 style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(), 'featured-thumb-large'); ?>)"></div>
                            <?php
                        }
                        ?>
                        <div class="<?php if(get_the_post_thumbnail()) { ?>col-8 <?php } ?>post-content content-holder-full">
                            <h3><a href="<?= get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                            <div class="text-right" style="padding-bottom: 15px">
                                <a href="<?= get_the_permalink(); ?>">Read More</a>
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