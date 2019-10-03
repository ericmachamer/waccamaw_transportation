<?php /* Template Name: Team */ ?>
<?php the_post(); ?>

<div class="container">
    <section class="row">
        <article class="composition col-12">
            <?php the_content(); ?>
            <?php get_template_part('partials/team-landing'); ?>
        </article>
    </section>
</div>