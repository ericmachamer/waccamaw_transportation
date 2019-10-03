<div class="awards-block">
    <div class="container">
        <div class="row">
            <div class="col col-12 text-center">
                <?php if(get_sub_field('awards_title') != '') { ?>
                    <h2><?= get_sub_field('awards_title'); ?></h2>
                <?php } ?>
                <?= get_sub_field('awards_description'); ?>
                <div class="row award-holder align-items-start">
                    <?php
                        $args = array(
                            'post_type' => 'safety-awards',
                            'posts_per_page' => 3
                        );
                        $query = new WP_Query( $args );
                        if ( $query->have_posts() ) : ?>
                    <?php
                            while ( $query->have_posts() ) : $query->the_post();
                    ?>
                                <div class="col col-12 col-md-4 text-left award-block" data-url="<?php the_permalink(); ?>">
                                    <div class="award-content">
                                        <?= get_the_post_thumbnail(get_the_ID(),'featured-thumb-large'); ?>
                                        <div class="award-text">
                                            <?php the_content(); ?>
                                        </div>
                                        <div class="read-more text-right">
                                            <a href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
                <a href="<?= get_sub_field('awards_button_url'); ?>#safety" class="btn btn-primary"<?= $target; ?>><?= get_sub_field('awards_button_text'); ?></a>
            </div>
        </div>
    </div>
</div>