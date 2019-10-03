<div class="container graphic-columns">
    <div class="row">
        <div class="col">
            <h2><?= get_sub_field('graphic_columns_title'); ?></h2>
            <p class="below-header"><?= get_sub_field('graphic_columns_sub_title'); ?></p>
        </div>
    </div>
    <div class="row justify-content-lg-center columns">
        <?php
            if( have_rows('columns') ):
                while ( have_rows('columns') ) : the_row();
                    $image = get_sub_field('graphic_columns_image');
            ?>
                <div class="col col-6 col-lg-2">
                    <div class="icons">
                        <?= wp_get_attachment_image( $image, 'icons' ); ?>
                    </div>
                    <a href="<?= get_sub_field('graphic_columns_link'); ?>"><?= get_sub_field('graphic_columns_under_title'); ?></a>
                </div>
            <?php
                endwhile;
            endif;
        ?>
    </div>
</div>