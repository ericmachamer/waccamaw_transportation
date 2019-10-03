<?php
$heading = get_field('s8_heading');
$desc = get_field('s8_description');

$numArticles = 3;
$query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => $numArticles,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => ['publish', 'private']
    ]
);
if ($query->have_posts()) {
    ?>
    <section class="section s8 waypoint has-effect">
        <div class="wrap">
            <?php

            if ($heading) {
                ?>
                <header class="section-header">
                    <h3 class="title"><?php echo $heading ?></h3>
                    <?php
                    if ($desc) {
                        ?>
                        <div class="desc"><?php echo $desc ?></div>
                        <?php
                    }
                    ?>
                </header>
                <?php
            }
            ?>

            <div class="items">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    $img = get_the_post_thumbnail_url(null, 'gallery');
                    ?>
                    <div class="item anim">
                        <figure>
                            <?php
                            if ($img) {
                                ?>
                                <div class="shade bg" style="background-image: url(<?php echo $img ?>);"></div>
                                <?php
                            }
                            ?>
                            <div class="shade hover">
                                <div class="content">
                                    <h3 class="title"><?php the_title() ?></h3>
                                    <ul class="categories">
                                        <?php
                                        the_category();
                                        ?>
                                    </ul>
                                    <div class="more">
                                        <a href="<?php the_permalink() ?>">
                                            <button class="btn ghost alt">Read More</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="body">
                            <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                            <time class="date"><?php echo get_the_date() ?></time>
                            <div class="excerpt"><?php the_excerpt() ?></div>
                        </div>

                    </div>
                    <?php
                }
                wp_reset_query();
                ?>
            </div>

            <?php
            $moreLink = get_field('s8_more_link');
            $moreText = get_field('s8_more_text');
            if ($moreText) {
                ?>
                <footer class="section-footer">
                    <div class="more">
                        <a href="<?php echo $moreLink ?>"><?php echo $moreText ?></a>
                    </div>
                </footer>
                <?php
            }
            ?>

        </div>
    </section>


    <?php
}
