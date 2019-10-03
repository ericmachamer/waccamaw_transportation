<div class="row timeline-holder">
    <?php
    if (have_rows('events')):
        $i = 0;
        while (have_rows('events')) : the_row();
            if ($i % 2 == 0) {
                $class = 'justify-content-start even';
                $col_class = '';
            } else {
                $class = 'justify-content-end odd';
                $col_class = 'offset-lg-2';
            }
            $i++;
            $image = get_sub_field('image');
            $size = 'timeline';
            $header_image = wp_get_attachment_image_src($image, $size);
            ?>
            <div class="col-12 col-lg-6 timeline-element">
                <div class="row">
                    <div class="col-12 col-lg-10 timeline-element-holder">
                        <div class="timeline-element-image">
                            <img src="<?= $header_image[0]; ?>" alt=""/>
                        </div>
                        <div class="timeline-element-content">
                            <div class="timeline-element-content--border"></div>
                            <h4><?= get_sub_field('sub_title'); ?></h4>
                            <h3><?= get_sub_field('title'); ?></h3>
                            <div class="reveal hidden">
                                <?= get_sub_field('content'); ?>
                            </div>
                            <div class="separator"></div>
                            <a href="#" class="show-all">Read More</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 timeline-date">
                        <div class="timeline-date-circle">
                            <div class="timeline-date-circle-text">
                                <?= get_sub_field('date'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    ?>
</div>
