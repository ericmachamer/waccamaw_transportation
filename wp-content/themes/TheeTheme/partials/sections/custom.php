<?php while(have_rows('prefab_sections')) { the_row();

	if(get_row_layout() == 'section') {

		$classes = 	get_sub_field('align_text');
		$classes .=	" ";
		$classes .=	get_sub_field('overlay');
		$classes .=	" ";
		$classes .=	get_sub_field('font');
		$classes .=	" ";
		$classes .=	get_sub_field('box_size');
		$classes .=	" ";
		$classes .=	get_sub_field('place_box');?>

		<section class="prefab-section <?=$classes;?>">

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
					
			
			<?php get_template_part('partials/prefab-items'); ?>
			<?php 
				while(have_rows('subsections')) { the_row();
					get_template_part('partials/prefab-items');
				}
			?>

		</section>
	<?php } else {
		get_template_part('partials/prefab-sections/' . get_row_layout());
	}
}