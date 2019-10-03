<?php
    $image = get_sub_field('bg_block_image');
    $size = 'bg-block';
    $bg_image = wp_get_attachment_image_src($image, $size);
?>
<div class="bg-block <?php if(get_sub_field('bg_block_overlay') == 'yes') { echo 'overlay'; } ?>" style="background-image: url(<?= $bg_image[0]; ?>);">
    <div class="container">
        <div class="row">
            <div class="col col-12">
                <?php if(get_sub_field('bg_block_title') != '') { ?>
                <h2><?= get_sub_field('bg_block_title'); ?></h2>
                <?php } ?>
                <?= get_sub_field('bg_block_content'); ?>
                <?php
                    if(get_sub_field('bg_block_overlay') == 'yes') {
                        $btn_class = 'white';
                    } else {
                        $btn_class = 'primary';
                    }
                    if(get_sub_field('bg_content_link_type') == 'internal') {
                        $target = '';
                        $url = get_sub_field('bg_content_page');
                    } else {
                        $target = ' target="_blank"';
                        $url = get_sub_field('bg_content_url');
                    }
                ?>
                <?php
                    if(get_sub_field('bg_block_button_text') != '') {
                ?>
                    <a href="<?= $url; ?>" class="btn btn-secondary"<?= $target; ?>><?= get_sub_field('bg_block_button_text'); ?></a>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>