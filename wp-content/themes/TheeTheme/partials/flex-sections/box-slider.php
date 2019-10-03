<div class="box-slider">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?= get_sub_field('people_slider_title'); ?></h2>
                <h3><?= get_sub_field('people_slider_sub_title'); ?></h3>
                <div class="box-slider-holder row">
                    <div id="box-carousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                    <?php
                    $runs = 0;
                        $posts = get_posts([
                            'post_type' => get_sub_field('people_post_type'),
                            'post_status' => 'publish',
                            'numberposts' => -1,
                            'order'    => 'ASC'
                        ]);
                        foreach ( $posts as $post ) : setup_postdata( $post );
                        $image = get_the_post_thumbnail_url(get_the_ID(), 'people');
                        $runs++;
                    ?>
                        <div class="carousel-item <?php if($runs === 1) { echo 'active'; } ?>">
                            <div class="col-12 col-md-6 col-lg-3 box">
                                <div class="image" style="background-image: url(<?= $image; ?>;"></div>
                                <div class="info-holder">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?= get_field('content'); ?></p>
                                    <div class="view-more">
                                        <a href="#">View More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                    </div>
                    <a class="carousel-control carousel-control-prev" href="#doctor-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control carousel-control-next" href="#doctor-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
