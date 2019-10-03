<?php /* Template Name: Jobs */ ?>
<?php the_post(); ?>

<div class="container">
    <section class="row">
        <?php thee_get_sidebar(); ?>
        <article class="composition col-12 offset-lg-1 col-lg-8">
            <?php the_content(); ?>
            <?php get_template_part('partials/job-landing'); ?>
        </article>
    </section>
</div>