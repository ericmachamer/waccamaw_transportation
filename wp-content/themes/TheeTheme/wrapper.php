<?php get_template_part('partials/head'); ?>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVMMPL8"

                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<div class="content-wrapper">
<?php
do_action('get_header');
get_template_part('partials/header');
if( have_rows('banner')  && get_field('banner_to_use') == "Advanced") {
	get_template_part('partials/banner');
} elseif( is_front_page() ) {
    get_template_part('partials/header-hero-home');
} else {
    get_template_part('partials/header-hero');
}
?>

<main id="main" class="main">
    <?php thee_get_template(); ?>
    <?php get_template_part('partials/sections/sections');?>
    <?php get_template_part('partials/flex-sections/index');?>
    <?php get_template_part('partials/by-the-numbers'); ?>
    <?php if(basename(get_permalink()) != 'contact') { ?>
        <?php get_template_part('partials/bg-block-options'); ?>
    <?php } ?>
</main>
</div>
<?php
do_action('get_footer');
get_template_part('partials/footer');
?>
</body>
</html>