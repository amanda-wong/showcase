<?php
/**
 * Template Name: About Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-hero">
			<?php get_header(); ?>
            <div class="hero-content">
                <?php echo CFS()->get('hero_content'); ?>
                <a href="assets/images/amanda-resume.pdf" download
                class="about-cta">
                    Download Resume
                </a>
            </div>
		</div>
        <section class="about-me-story">

        </section>
        <section class="instagram">
            <ul id="image-load">

            </ul>
        </section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
