<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html <?php language_attributes(); ?> class="ie ie6 lte9 lte8 lte7 lte6 no-js"> <![endif]-->
<!--[if IE 7 ]>
<html <?php language_attributes(); ?> class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8 ]>
<html <?php language_attributes(); ?> class="ie ie8 lte9 lte8 no-js"> <![endif]-->
<!--[if IE 9 ]>
<html <?php language_attributes(); ?> class="ie ie9 lte9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<?php
  $browser = new Browser();
?>
<html <?php language_attributes(); ?> class="no-js <?php echo $browser->getBrowser(); ?>"> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|'); ?></title>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cleartype" content="on">
  <meta name="theme-color" content="#dc1921">
  <meta name="google-site-verification" content="DgrBTUvGw8oNWVjWAoGymXwdyFBxd63LlSSI9xJKTKM" />

    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WVMMPL8');</script>
    <!-- End Google Tag Manager -->
  <!--[if lte IE 9 ]>
  <script src="<?php bloginfo('template_url') ?>/scripts/vendor/selectivizr.js"></script>
  <script src="<?php bloginfo('template_url') ?>/scripts/vendor/respond.js"></script>
  <script src="<?php bloginfo('template_url') ?>/scripts/vendor/mediamatch.js"></script>
  <![endif]-->
  <?php get_template_part('partials/variables');?>
</head>
