<div class="above-fold">
    <?php
        $imageID = get_field('hero_image');
        $image_size = 'bg-block';
        $image = wp_get_attachment_image_src($imageID, $size = $image_size);
    ?>
    <div class="header-hero" style="background-image: url('<?= $image[0] ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-11">
                    <h1><?= get_field('custom_page_headline'); ?></h1>
                    <h2><?= get_field('custom_sub_headline'); ?></h2>
                    <a href="<?= get_field('hero_cta_link'); ?>" class="btn btn-white"><?= get_field('hero_cta_text'); ?></a>
                </div>
            </div>
        </div>
        <div class="scroll-banner">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <a href="#main" class="scroll-text js-scroll">Scroll down to learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>