<div class="col-12 styled-block">
    <div class="styled-block-content">
        <div class="styled-block-content-holder">
            <div class="row no-gutters content-holder content-holder-full safety">
                <?php
                if(get_the_post_thumbnail()) {
                    ?>
                    <div class="col-4 post-image"
                         style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(), 'featured-thumb-large'); ?>)"></div>
                    <?php
                }
                ?>
                <div class="<?php if(get_the_post_thumbnail()) { ?>col-8 <?php } ?>post-content">
                    <h3><a href="<?= get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-date">
                        <?php the_date(); ?>
                    </div>
                    <?php the_excerpt(); ?>
                    <div class="text-right">
                        <a href="<?= get_the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>