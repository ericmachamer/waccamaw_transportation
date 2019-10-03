<footer class="footer sticky">
  <div class="footer-container container">
    <div class="row">
        <div class="col-12 col-md-4">

            <div class="row">
                <div class="col">
                    <a class="footer-logo" href="<?php echo bloginfo('url'); ?>"><?php if (get_field('logo', 'option')) {
                            $image = get_field('footer_logo', 'option');
                            $size = 'small';
                            $image_url = wp_get_attachment_image_src($image, $size);
                            ?>
                            <img
                            src="<?= $image_url[0] ?>" class="logo"
                            alt="<?php echo bloginfo('name'); ?>" /><?php } else {
                            echo bloginfo('name');
                        } ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col phone-col">
                    Call Us <a href="tel:<?= get_field('main_phone', 'option'); ?>" class="phone"><?= get_field('main_phone', 'option'); ?></a>
                </div>
            </div>
            <div class="row social-holder">
                <div class="col-12">
                <?php
                if( have_rows('social_networks', 'option') ):
                    while ( have_rows('social_networks', 'option') ) : the_row();
                        ?>
                        <div class="social">
                            <a href="<?= get_sub_field('network_link'); ?>" target="_blank"><i class="fab <?= get_sub_field('network_icon'); ?>"></i></a>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-4">
                    <?php
                    $location = 'footer1-navigation';
                    $menu_obj = get_menu_by_location($location);
                    echo "<h3>".esc_html($menu_obj->name)."</h3>";
                    wp_nav_menu(array(
                        'theme_location' => 'footer1-navigation',
                        'container' => '',
                        'menu_class' => 'footer-menu-list'
                    ));
                    ?>
                </div>
                <div class="col-4">
                    <?php
                    $location = 'footer2-navigation';
                    $menu_obj = get_menu_by_location($location);
                    echo "<h3>".esc_html($menu_obj->name)."</h3>";
                    wp_nav_menu(array(
                        'theme_location' => 'footer2-navigation',
                        'container' => '',
                        'menu_class' => 'footer-menu-list'
                    ));
                    ?>
                </div>
                <div class="col-4">
                    <?php
                    $location = 'footer3-navigation';
                    $menu_obj = get_menu_by_location($location);
                    echo "<h3>".esc_html($menu_obj->name)."</h3>";
                    wp_nav_menu(array(
                        'theme_location' => 'footer3-navigation',
                        'container' => '',
                        'menu_class' => 'footer-menu-list'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
      <div class="row sub-footer">
          <div class="col-12 col-md-8">
              <address class="footer-copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved. <?php
                  wp_nav_menu(array(
                      'theme_location' => 'copy-navigation',
                      'container' => '',
                      'menu_class' => 'footer-copy-list'
                  ));
                  ?></address>
          </div>
          <div class="col-12 col-md-4 thee-line">
              <p><a href="http://www.theedigital.com/raleigh-web-design" target="_blank">Web Design</a> &amp; <a href="https://www.theedigital.com/internet-marketing/seo" target="_blank">SEO</a> by <a href="https://www.theedigital.com/" target="_blank">TheeDigital</a></p>
          </div>
      </div>

  </div>

    <?php wp_footer(); ?>
    

</footer>