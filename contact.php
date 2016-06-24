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
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


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
