<?php if(get_page_template_slug($post->ID) != 'page-contact.php') { ?>

<div class="footer-call-to-action">
	<div class="container">
	    <section class="row">
	        <article class="composition col-sm-7">
	            <?php gravity_form( get_field('select_form') ?: 1, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = false, $echo = true );
	            ?>
	        </article>
	    </section>
	</div>
</div>

<?php } ?>