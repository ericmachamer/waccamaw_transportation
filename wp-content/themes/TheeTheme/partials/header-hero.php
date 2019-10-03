<?php 
    $bg = get_field('hero_image');
    if(!$bg) {
        if(is_singular( 'post' )) {
            $bg = get_post_thumbnail_id();
            if(!$bg) {
                $bg = get_field('default_hero', 'option');
            }
        } else {
            $bg = get_field('default_hero', 'option');
        }
    }
$url = wp_get_attachment_image_src($bg, 'bg-block');
?>

<div class="header-hero-internal header-gap" style="background-image: url(<?= $url[0]; ?>);">
    <div class="container header-hero-container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="hero-headline-holder">
                    <h1 class="hero-headline"><?php if(get_field('custom_page_headline')) {
                            the_field('custom_page_headline');
                        } else if(single_post_title()) {
                            single_post_title();
                        } else {
                            single_cat_title();
                        }?></h1>
                    <?php if(get_field('custom_sub_headline')) { ?>
                        <h2 class="hero-headline-sub"><?= get_field('custom_sub_headline'); ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>