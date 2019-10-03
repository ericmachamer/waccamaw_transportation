<?php
$items = get_field('s5_items');

if ($items) {
    ?>
    <section class="section s5">
        <div class="wrap">
            <?php
            $heading = get_field('s5_heading');
            $desc = get_field('s5_description');

            if ($heading) {
                ?>
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
                <?php
            }
            ?>

            <div class="items">
                <?php
                foreach ($items as $item) {
                    $img = $item['image'];
                    $external = $item['external'];
                    $link = $external ? $item['link_external'] : $item['link'];
                    $target = $external ? '_blank' : '_self';
                    ?>
                    <div class="item">
                        <div class="shade bg" style="background-image: url(<?php echo $img['sizes']['medium'] ?>);"></div>
                        <div class="shade hover">
                            <a href="<?php echo $link ?>" target="<?php echo $target ?>">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <h3 class="title"><?php echo $item['title'] ?></h3>
                                    <div class="desc"><?php echo $item['description'] ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <?php
            $moreLink = get_field('s5_more_link');
            $moreText = get_field('s5_more_text');
            if ($moreText) {
                ?>
                <footer class="section-footer">
                    <div class="more">
                        <a href="<?php echo $moreLink ?>"><?php echo $moreText ?></a>
                    </div>
                </footer>
                <?php
            }
            ?>
        </div>
    </section>
    <?php
}
