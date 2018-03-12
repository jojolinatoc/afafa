<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

	<div class="container">
		<div class="row">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

			endwhile;
			?>
	
		</div>
	</div>

<?php
get_footer();
