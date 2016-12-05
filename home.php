

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php get_header(); ?>
			<section class="blog-content canvas">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; // End of the loop. ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
