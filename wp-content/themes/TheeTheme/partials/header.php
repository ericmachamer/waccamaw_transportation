<header class="header sticky">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-lg-right">
                    <a href="<?= get_field('employee_portal_url', 'option'); ?>">Employee Portal</a>
                    <!--<a href="<?= get_field('customer_portal_url', 'option'); ?>" target="_blank">Customer Portal</a>-->
                    <?php
                    if ( is_user_logged_in() ) {
                    ?>
                        <a class="log-out" href="<?= wp_logout_url( home_url() ); ?>">Log Out</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-eq-height">
            <div class="col-12 col-lg-4 text-center text-lg-left">
                <a class="header-logo" href="<?php echo bloginfo('url'); ?>"><?php if (get_field('logo', 'option')) {
                        $image = get_field('logo', 'option');
                        $size = 'small';
                        $image_url = wp_get_attachment_image_src($image, $size);
                    ?>
                        <img
                        src="<?= $image_url[0] ?>" class="logo"
                        alt="<?php echo bloginfo('name'); ?>" /><?php } else {
                        get_template_part("partials/phlogo");
                        // echo bloginfo('name');


                    } ?></a>
            </div>
            <div id="nav-holder" class="col-8 text-right">
                <?php bootstrap_nav(); ?>
            </div>
            <script>
                jQuery('#nav-holder #menu-header-menu').append('<li class="nav-phone"><a class="nav-link" href="tel:<?php the_field("main_phone", "option"); ?>"><?php the_field("main_phone", "option"); ?></a></li>');
            </script>
            <div class="mobile-nav">
                <div class="hamburger hamburger-1"></div>
                <div class="hamburger hamburger-2"></div>
                <div class="hamburger hamburger-3"></div>
            </div>
            <div class="mobile-content">
                <a class="nav-link phone-link" href="tel:<?php the_field("main_phone", "option"); ?>">Call</a>
            </div>
        </div>
    </div>
</header>