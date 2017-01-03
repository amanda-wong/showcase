<?php
/**
 * Template Name: Contact Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
			<?php get_header(); ?>
        <section class="canvas">
            <div class="contact-content">
                <h1>Let's chat!</h1>
               <p>
				   <?php echo CFS()->get( 'contact_content' ); ?>
			   </p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="64" title="Contact Form"]' ); ?>
        </section>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
