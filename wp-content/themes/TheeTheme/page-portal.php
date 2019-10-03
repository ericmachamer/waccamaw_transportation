<?php /* Template Name: Portal */ ?>
<?php the_post(); ?>

<div class="container">
    <section class="row justify-content-center">

            <?php
            if ( is_user_logged_in() ) {
            ?>
            <article class="composition col-12">
            <?php
                the_content();
            ?>
            </article>
            <?php
            } else {
            ?>
                <article class="composition col-4 login-form">
                    <div class="login-logo text-center">
                        <?php if (get_field('logo', 'option')) {
                        $image = get_field('logo', 'option');
                        $size = 'small';
                        $image_url = wp_get_attachment_image_src($image, $size);
                        ?>
                        <img
                                src="<?= $image_url[0] ?>" class="logo"
                                alt="<?php echo bloginfo('name'); ?>" /><?php } else {
                            get_template_part("partials/phlogo");
                            // echo bloginfo('name');


                        } ?>
                    </div>
                <?php
                wp_login_form();
                ?>
                    <div class="col-12 text-right">
                        <a href="<?php echo wp_lostpassword_url( $redirect ); ?>">Lost Password?</a>
                    </div>
                </article>
                <?php
            }
            ?>
        </article>
    </section>
</div>