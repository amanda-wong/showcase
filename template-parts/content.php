<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-img-wrap">
				<?php the_post_thumbnail( 'large' ); ?>
				<div class="entry-meta">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php red_starter_posted_on(); ?>
				</div>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
