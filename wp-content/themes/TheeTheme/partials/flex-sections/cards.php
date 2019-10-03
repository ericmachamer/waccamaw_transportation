<section class="flip-cards wrapper">
    <div class="container">
        <div class="row">
            <div class="col text-center">
	    <?php
	    $heading = get_sub_field( 'headline' );
	    $desc    = get_sub_field( 'description' );

	    if ( $heading ) {
		    ?>
            <header class="section-header">
                <h2 class="title"><?php echo $heading ?></h2>
			    <?php
			    if ( $desc ) {
				    ?>
                    <div class="desc"><?php echo $desc ?></div>
				    <?php
			    }
			    ?>
            </header>
		    <?php
	    }
	    ?>
            </div>
        </div>
        <div class="row items">
            <?php while(have_rows('items')) { the_row(); ?>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="item-container">
                        <?php
                            $image = get_sub_field('icon');
                            $size = 'logo-area';
                            $url = wp_get_attachment_image_src($image, $size);
                            $link = get_sub_field('link');
                        ?>
                        <div class="item-bg" style="background-image: url(<?= $url[0]; ?>);" data-url="<?php echo $link['url']; ?>">
                            <h3 class="title"><?php the_sub_field('title'); ?></h3>
                            <div class="desc"><?php the_sub_field('description'); ?></div>

                            <a href="<?php echo $link['url']; ?>" class="more"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>