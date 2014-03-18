<?php
/*
 * This template is used for the display of archives.
 */

get_header(); ?>
	<section class="content-wrapper archive-content archives cf">
		<article class="content cf">
            	<?php get_sidebar(); ?>
			<?php
				get_template_part( 'loop', 'archive' ); // Loop - Archive
				get_template_part( 'post', 'navigation' ); // Post Navigation
			?>
		</article>

	
	</section>

<?php get_footer(); ?>