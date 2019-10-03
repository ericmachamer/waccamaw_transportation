<div class="section-layout md-width columns-5 logos-section">
	<?php while(have_rows('logos')) { the_row(); ?>
		<a href="<?php echo get_sub_field('link');?>" class="logo">
			<img src="<?php echo get_sub_field('logo')['url'];?>">
		</a>
	<?php } ?>
</div>