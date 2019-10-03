<section class="iconic wrapper">
    <div class="container">
        <?php
        $heading = get_sub_field('heading');
        $desc = get_sub_field('description');

        if ($heading) {
            ?>
            <div class="row">
                <div class="col">
                    <header class="section-header">
                        <h3 class="title"><?php echo $heading ?></h3>
                        <?php
                        if ($desc) {
                            ?>
                            <div class="desc"><?php echo $desc ?></div>
                            <?php
                        }
                        ?>
                    </header>
                </div>
            </div>
            <?php
        }
        ?>

        <?php if(have_rows('items')){ ?>
            <div class="row">
                <?php while(have_rows('items')) { the_row(); ?>
                    <a class="col text-center" href="<?php echo get_sub_field('link')['link'] ?>" target="<?php echo get_sub_field('link')['target']; ?>">
                        <div class="content">
                            <div class="icon">
                                <div class="hover"></div>
                                <?php the_sub_field('icon'); ?>
                            </div>
                            <h3 class="title">
                                <?php the_sub_field('title'); ?>                                  
                            </h3>
                            <div class="desc">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>