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
                <form name="contact_form" class="contact-form" action="/process_form.php" method="post">
                    <div class="name-wrap">
                        <label>Full Name *</label>
                        <div>
                            <input type="text" name="firstName" id="first-name" value="">
                            <label for="firstName" required>First Name</label>
                        </div>
                        <div>
                            <input type="text" name="lastName" id="last-name" value="">
                            <label for="lastName" required>Last Name</label>
                        </div>
                    </div>
                    <div class="email-wrap">
                        <label for="email">Email Address *</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="">
                    </div>
                    <div class="message-wrap">
                        <textarea name="message" rows="8" cols="40" placeholder="Leave a message" value=""></textarea>
                    </div>
                    <input class="send-message" type="button" name="button" value="Send" action="submit">
                </form>
        </section>
        <?php get_footer(); ?>
	</main><!-- #main -->
</div><!-- #primary -->
