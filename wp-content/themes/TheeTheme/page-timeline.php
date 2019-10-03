<?php /* Template Name: Timeline */ ?>
<?php the_post(); ?>

<div class="container">
    <section class="row">
        <article class="composition col-12">
            <?php the_content(); ?>
            <?php get_template_part('partials/timeline-landing'); ?>
        </article>
    </section>
</div>