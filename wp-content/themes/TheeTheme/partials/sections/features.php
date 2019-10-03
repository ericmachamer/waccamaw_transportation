<div class="section-layout lg-width columns-3 features-section">
	<?php while(have_rows('features')) { the_row(); ?>
		<div href="<?php echo get_sub_field('link');?>" class="features">
			<div class="feature-illustrate">
				<img src="<?php echo get_sub_field('icon')['url'];?>">
			</div>
			<div class="features-content">
				<h3><?php the_sub_field('label');?></h3>
				<p><?php the_sub_field('description');?></p>
			</div>
		</div>
	<?php } ?>
</div>