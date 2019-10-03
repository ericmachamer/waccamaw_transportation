<?php while(have_rows('sections')) { the_row();
	$classes =	get_sub_field('overlay');
	$classes .=	" ";
	$classes .=	get_sub_field('text_color');
	$classes .=	" bg-";
	$classes .=	get_sub_field('background_color');
	$classes .= " ";
	$classes .= get_sub_field('padding');
	?>

	<section class="simple-section <?=$classes;?>">
        <div class="container">
            <div class="row">
                <div class="col">
                <?php if(get_sub_field('headline')) { ?>
                    <h2 class="headline"><?php the_sub_field('headline');?></h2>
                <?php } ?>
                <?php if(get_sub_field('subheadline')) { ?>
                    <span class="subheadline"><?php the_sub_field('subheadline');?></span>
                <?php } ?>
                </div>
            </div>
        </div>

		<?php if(get_sub_field('background_video_mp4') || get_sub_field('background_video_ogg')) { ?>
			<div class="bg-video-wrap bg-obj">
				<video class="bg-video" autoplay loop muted >
				  <source src="<?php echo get_sub_field('background_video_mp4')['url'];?>" type="video/mp4">
				  <source src="<?php echo get_sub_field('background_video_ogg')['url'];?>" type="video/ogg">		
				</video>
			</div>
		<?php } ?>

		<?php if(get_sub_field('background_image')) {
			$bg = get_sub_field('background_image');?>
			<img src="<?=$bg['url'];?>" class="bg-image bg-obj" />
		<?php } ?>
		<?php if(get_sub_field('background_image_mobile')) {
			$bg = get_sub_field('background_image_mobile');?>
			<img src="<?=$bg['url'];?>" class="bg-image-mobile bg-obj" />
		<?php } ?>

		<?php 
		switch(get_sub_field('type_of_section')) {
			case "custom":
				get_template_part('partials/sections/custom');
				break;

			case "dual":
				get_template_part('partials/sections/dual-content');
				break;

			case "logos":
				get_template_part('partials/sections/logos');
				break;

			case "features": 
				get_template_part('partials/sections/features');
				break;
		} ?>

	</section>
<?php } ?>