<?php
/*
 * This template is used for the display of single posts.
 */

get_header(); ?>
	<section class="content-wrapper post-content-wrapper single-content cf">
		<article class="content cf">
            <?php get_sidebar(); ?>
			<?php get_template_part( 'yoast', 'breadcrumbs' ); // Yoast Breadcrumbs ?>
			
			<?php get_template_part( 'loop' ); // Loop ?>
		</article>

		
	</section>

<?php get_footer(); ?>