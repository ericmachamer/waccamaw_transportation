<?php if( have_rows('logos', 'option') ): ?>
    <div class="logos-list">
        <div class="container ">
            <div class="row">
                <div class="col text-center">
                    <?php if(get_field('logos_title', 'options')) { ?>
                        <h3><?php the_field('logos_title', 'options');?></h3>
                    <?php } ?>
                    <?php if(get_field('logos_subtitle', 'options')) { ?>
                        <span class="subtitle"><?php the_field('logos_subtitle', 'options');?></span>
                    <?php } ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php 

                while ( have_rows('logos', 'option') ) : the_row();
                    $image = get_sub_field('logo');
                    $size = 'logo-area';
                    $logo = wp_get_attachment_image_src($image, $size);?>
                    <div class="col logos">
                        <a href="#">
                            <img src="<?= $logo['0']; ?>" alt="<?= get_sub_field('logo_name'); ?>" />
                        </a>
                    </div>
                    <?php
                endwhile; ?>
            </div>
        </div>
    </div>
<?php endif;