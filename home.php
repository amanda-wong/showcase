<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="blog-content">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; // End of the loop. ?>
			</div>
			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
