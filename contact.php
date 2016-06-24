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
                <h1>Helloooooooooooo there</h1>
                <p>
                    Please feel free to reach out to me if you have any questions or comments about the services I offer. Also, you could always just send me a friendly hello.
                </p>
            </div>
                <form name="contact_form" class="contact-form" action="/process_form.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Name" value="">
                    <input type="text" name="subject" id="subject" placeholder="Subject" value="">
                    <input type="email" name="email" id="email" placeholder="Email" value="">
                    <textarea name="message" rows="8" cols="40" placeholder="Leave a message" value=""></textarea>
                    <input class="send-message" type="button" name="button" value="Send" action="submit">
                </form>
        </section>
        <?php get_footer(); ?>
	</main><!-- #main -->
</div><!-- #primary -->
