<?php
    $image = get_field('bg_block_image', 'option');
    $size = 'bg-block';
    $bg_image = wp_get_attachment_image_src($image, $size);
?>
<div class="bg-block cta <?php if(get_field('bg_block_overlay', 'option') == 'yes') { echo 'overlay'; } ?>" style="background-image: url(<?= $bg_image[0]; ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-8">
                <?php if(get_field('bg_block_title', 'option') != '') { ?>
                <h2><?= get_field('bg_block_title', 'option'); ?></h2>
                <?php } ?>
                <?= get_field('bg_block_content', 'option'); ?>
            </div>
        </div>
    </div>
</div>