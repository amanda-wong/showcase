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
                <h1 class="contact-greeting">Say Hello</h1>
                <form name="contact_form" class="contact-form" action="/process_form.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" value="">
                    <input type="text" name="subject" id="subject" placeholder="Subject" value="">
                    <input type="email" name="email" id="email" placeholder="Email" value="">
                    <textarea name="message" rows="8" cols="40" placeholder="Leave a message" value=""></textarea>
                    <input class="send-message" type="button" name="button" value="Send" action="submit">
                </form>
            </div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
