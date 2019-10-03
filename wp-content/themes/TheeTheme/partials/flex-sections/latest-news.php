<div class="news-holder">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2><?= get_sub_field('news_title'); ?></h2>
            </div>
        </div>
        <div class="row featured-post-holder">
            <div class="col-12 col-md-6">
                <?php
                $args = array(
                    'numberposts' => 1,
                    'offset' => 0,
                    'category' => 0,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'include' => '',
                    'exclude' => '',
                    'meta_key' => '',
                    'meta_value' =>'',
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'suppress_filters' => true
                );

                $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
                foreach( $recent_posts as $recent ){
                ?>
                    <div class="featured-post">
                        <?= get_the_post_thumbnail( $recent['ID'], 'featured-thumb-large' ); ?>
                        <div class="post-title">
                            <h3><?= $recent["post_title"]; ?></h3>
                            <a class="read-more" href="<?= get_permalink($recent["ID"]); ?>">Full Article <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                <?php
                }
                wp_reset_query();
                ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <?php
                    $args = array(
                        'numberposts' => 4,
                        'offset' => 1,
                        'category' => 0,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'include' => '',
                        'exclude' => '',
                        'meta_key' => '',
                        'meta_value' =>'',
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'suppress_filters' => true
                    );

                    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
                    foreach( $recent_posts as $recent ){
                    ?>
                        <div class="col-xs-12 col-sm-6 small-post-holder">
                            <?php
                                $image = $recent['ID'];
                                $size = 'featured-thumb-small';
                                $bg_image = get_the_post_thumbnail_url($image, $size);
                            ?>
                            <div class="small-post<?php if($bg_image != '') { echo ' bg-overlay'; } ?>" style="background-image: url(<?= $bg_image; ?>);">
                                <div class="post-title">
                                    <h3><?= $recent["post_title"]; ?></h3>
                                    <a class="read-more" href="<?= get_permalink($recent["ID"]); ?>">Full Article <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>