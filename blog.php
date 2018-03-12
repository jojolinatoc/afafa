<?php 
/**
 * Template Name: Blog
 */
get_header(); ?>
<div id="primary" class="content-area">
	<div class="container courses-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center">Blog</h1>
				<hr class="my-4">
			</div>
		</div>
	</div>
	<div class="container">
   		<div class="row">
   			<div class="col-lg-8 col-md-8 col-xs-12">
   				<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<div class="col-lg-12"></div>

				<!-- the loop -->
				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php afafa_posted_on(); ?>
					<p>
						<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'afafa' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );
						?>
					</p>
				<?php endwhile; ?>
				<!-- end of the loop -->
   			</div>
   			<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
   			<div class="col-lg-4 col-md-4 col-xs-12">
   				<?php get_sidebar(); ?>
   			</div>
   		</div>	 
	</div>
</div><!-- #primary -->
<?php get_footer(); ?>