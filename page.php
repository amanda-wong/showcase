<!--
  The template for displaying all pages.
  -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_header(); ?>
			<section class="canvas">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
