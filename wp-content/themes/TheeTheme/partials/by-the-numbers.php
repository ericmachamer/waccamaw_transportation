<div class="by-the-numbers-holder">
    <div class="container by-the-numbers">
        <div class="row">
            <?php
                if( have_rows('facts', 'option') ):
                    while ( have_rows('facts', 'option') ) : the_row();
            ?>
                <div class="col-6 col-xl-3 btnum-holder">
                    <?php
                        $image = get_sub_field('icon');
                        $url = wp_get_attachment_image_src($image);
                    ?>
                    <img src="<?= $url[0]; ?>" alt="<?= get_sub_field('number').' '.get_sub_field('text'); ?>" class="icon" />
                    <div class="btnum-text">
                        <p class="number"><?= get_sub_field('number'); ?></p>
                        <p class="text"><?= get_sub_field('text'); ?></p>
                    </div>
                </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>