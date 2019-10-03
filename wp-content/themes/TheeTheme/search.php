<?php global $wp_query; ?>

<div class="container">
  <section class="posts posts-search row composition">
    <div class="col-sm-12">
      <h1 class="page-title">
          <?php echo $wp_query->found_posts; ?> Result<?php if ($count != 1) {
              echo 's';
          } ?> for "<?php the_search_query(); ?>"
      </h1>
      <?php get_search_form(); ?>
      <ul class="posts-list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php thee_get_template_part('partials', 'loop-post'); ?>
          <?php endwhile; else : ?>
              <?php thee_get_template_part('partials', 'loop-post-not-found'); ?>
          <?php endif; ?>
      </ul>

        <?php thee_get_template_part('partials', 'pagination'); ?>
    </div>
  </section>
</div>