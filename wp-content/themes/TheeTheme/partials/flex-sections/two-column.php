<?php
    $left_content = get_sub_field('left_column');
    $right_content = get_sub_field('right_column');
?>
<div class="two-column-holder">
    <div class="row images no-gutters">
        <?php
            $left_url = $left_content['background_image'];
            $right_url = $right_content['background_image'];
            $size = 'bg-block';
            $left_img = wp_get_attachment_image_src($left_url, $size);
            $right_img = wp_get_attachment_image_src($right_url, $size);
        ?>
        <div class="col col-12 col-md-6">
            <div class="overlay <?= $left_content['overlay']; ?>" style="background-image: url(<?= $left_img[0]; ?>);"></div>
        </div>
        <div class="col col-12 col-md-6">
            <div class="overlay <?= $right_content['overlay']; ?>" style="background-image: url(<?= $right_img[0]; ?>);"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 ">
                <?php
                    $content = get_sub_field('left_column');
                ?>
                <?php if($content['title'] !== '') { ?>
                    <h2><?= $content['title']; ?></h2>
                <?php } ?>
                <?php if($content['sub_title'] !== '') { ?>
                    <h3><?= $content['sub_title']; ?></h3>
                <?php } ?>
                <?php if($content['content'] !== '') { ?>
                    <div class="content-holder">
                        <?= $content['content']; ?>
                    </div>
                <?php } ?>
                <?php if($content['button_text'] !== '') { ?>
                    <a href="<?= $content['button_link']['url']; ?>" class="btn btn-outline-primary"><?= $content['button_text']; ?></a>
                <?php } ?>
            </div>
            <div class="col-12 col-md-5 offset-md-2">
                <?php
                $content = get_sub_field('right_column');
                ?>
                <?php if($content['title'] !== '') { ?>
                    <h2><?= $content['title']; ?></h2>
                <?php } ?>
                <?php if($content['sub_title'] !== '') { ?>
                    <h3><?= $content['sub_title']; ?></h3>
                <?php } ?>
                <?php if($content['content'] !== '') { ?>
                    <div class="content-holder">
                        <?= $content['content']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>