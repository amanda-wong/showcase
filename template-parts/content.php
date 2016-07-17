<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : echo '<a class="img-link" href="' .
		get_permalink($post->ID) . '" >'; the_post_thumbnail(); echo '</a>';?>

  		<div class="entry-meta">
	  		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">',
			esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	  		<?php red_starter_posted_on(); ?>
  		</div>

		<?php endif; ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
