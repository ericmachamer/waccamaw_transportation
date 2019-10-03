<?php the_post(); ?>

<div class="container">
  <section class="row">
      <?php thee_get_sidebar('-jobs'); ?>
    <article class="col-12 offset-lg-1 col-lg-8 order-first order-lg-last">
      <div class="page-content composition">
          <?php the_content(); ?>
      </div>
      <?php if(post_type_supports(get_post_type(), 'comments')) { ?>
        <section class="comments">
            <?php comments_template(); ?>
        </section>
      <?php } ?>
    </article>
  </section>
</div>