<?php the_post(); ?>

<div class="container">
  <section class="row">
      <?php thee_get_sidebar('-blog'); ?>
    <article class="col-12 offset-lg-1 col-lg-8 order-first order-lg-last">
      <div class="page-content composition">
          <div class="post-date">
              <?php the_date(); ?>
          </div>
          <?php the_content(); ?>
      </div>
    </article>
  </section>
</div>