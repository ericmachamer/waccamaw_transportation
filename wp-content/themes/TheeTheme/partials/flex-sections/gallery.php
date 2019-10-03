<section class="gallery wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= get_sub_field('title'); ?></h2>
                <?php
                    if(get_sub_field('content')) {
                ?>
                <div class="content">
                    <?php
                        echo get_sub_field('content');
                    ?>
                </div>
                <?php
                    }
                ?>
                <div class="gallery-holder">
                    <?php
                        $images = get_sub_field('gallery');
                        $size = 'featured-thumb-large';
                        if( $images ):
                    ?>
                            <ul class="row">
                                <?php foreach( $images as $image ): ?>
                                    <li class="col-6 col-md-3">
                                        <div class="image-holder" style="background-image: url(<?= wp_get_attachment_image_url( $image['ID'], $size ); ?>"></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>