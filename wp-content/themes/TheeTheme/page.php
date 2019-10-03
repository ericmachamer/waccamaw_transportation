<?php the_post(); ?>

<div class="container">
	<section class="row">
        <?php thee_get_sidebar(); ?>
		<article class="col-12 offset-lg-1 col-lg-8">
      		<div class="page-content composition">
          		<?php the_content(); ?>
      		</div>
		</article>
	</section>
</div>