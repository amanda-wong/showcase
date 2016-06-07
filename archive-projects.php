<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="block-container">
			<?php while ( have_posts() ) : the_post(); ?>

				<a href="<?php get_permalink() ?>">
                    <div>
                        <h3><?php get_the_title() ?></h3>
                        <p><?php echo CFS()->get('project_type') ?></p>
				    </div>
				</a>

			<?php endwhile; ?>
			</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
