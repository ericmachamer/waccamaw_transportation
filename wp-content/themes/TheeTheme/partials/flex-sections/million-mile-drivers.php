<section class="million-mile-driver wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= get_sub_field('title'); ?></h2>
                <?php
                if(get_sub_field('content')) {
                    ?>
                    <div class="content">
                        <?php
                        echo get_sub_field('content');
                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="driver-holder">
                    <?php
                    $args = array(
                        'post_type' => 'safety-awards',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'categories',
                                'field'    => 'slug',
                                'terms'    => 'million-mile-safe-driving-award',
                            ),
                        ),
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        echo '<div class="row">';
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                    ?>
                            <div class="col-12 col-md-4">
                                <div class="profile" data-url="<?= get_the_permalink(); ?>">
                                    <div class="image">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'featured-thumb-large'); ?>
                                    </div>
                                    <h4><a href="<?= get_the_permalink(); ?>"><?= get_the_title(); ?></a></h4>
                                </div>
                            </div>
                    <?php
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>