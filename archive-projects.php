<?php
/**
 * Template Name: Projects Archive Page
 *
 * @package Showcase
 */

 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php get_header(); ?>
			<section class="canvas">
				<?php if ( have_posts() ) : ?>

					<div class="block-container">
					<?php while ( have_posts() ) : the_post(); ?>
						<a href="<?php get_permalink() ?>">
		                    <div class="project-image">
		                        <h3><?php the_title(); ?></h3>
		                        <p><?php echo CFS()->get('project_type') ?></p>
						    </div>
						</a>

					<?php endwhile; ?>
					</div>
					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
