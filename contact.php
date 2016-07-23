<?php
/**
 * Template Name: Contact Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-hero">
			<?php get_header(); ?>
            <div class="hero-content">
				<h1>Connect with me</h1>
                <hr/>
			</div>
        </div>
        <section class="contact-container">
            <div class="contact-content">
                <h2>Say hello</h2>
                <p>
                    How I like to keep current with technology trends is working new projects,
                    sharing cool ideas or just starting a conversation!
                    Feel free to reach out, I'd love to hear from you!
                </p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="64" title="Contact Form"]' ); ?>
        </section>
        <?php get_footer(); ?>
	</main><!-- #main -->
</div><!-- #primary -->
