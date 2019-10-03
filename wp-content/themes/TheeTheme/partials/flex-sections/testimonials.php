<?php 


$args = array(
	'post_type' => 'testimonial',
	'posts_per_page'         => '3',
);

$bg = get_field('hero_image') ? get_field('hero_image') : '/wp-content/themes/TheeTheme/dist/images/login-bg.jpg';

$testimonials = new WP_Query($args);
if($testimonials->have_posts()) : ?>
	<div class="testimonials-block" style="background-image: url(<?=$bg;?>);" >
		<h2><?php $title = get_sub_field('title') ? get_sub_field('title') : 'Testimonials'; echo $title;?></h2>
		<div class="container">
		<?php 
			while($testimonials->have_posts()) : $testimonials->the_post();?>
				<div class="testimonial">
					<div class="testimonial-content">
						<?php the_content();?>
					</div>
					<h3><?php the_title();?> from <?php the_field('location');?></h3>
					<?php the_post_thumbnail('thumbnail');?>
					<a href="<?php the_permalink();?>" class="read-more">Read more</a>
				</div>
			<?php endwhile;?>
		</div>
	</div>
<?php 
endif;
wp_reset_postdata();
