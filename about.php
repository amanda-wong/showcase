<?php
/**
 * Template Name: About Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php get_header(); ?>
        <section class="canvas">
			<h1>Hello I'm amanda</h1>
            <div class="about-copy">
				<p><?php echo CFS()->get( 'about_me' ); ?></p>
            </div>

            <div class="skills-container">
                <div class="skill">
                    <div class="skill-label">
                        HTML
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        CSS
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        Sass/Less
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="60%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        Gulp
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="60%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        Git
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="40%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        WordPress
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="30%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        JavaScript
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="25%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        SQL/PosgreSQL
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="25%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        jQuery
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="20%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        PHP
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="15%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        Angular/React
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="15%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        <i class="fa fa-info-circle" aria-hidden="true" title="Passion and willingness to learn"></i>  P++
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="100%"></div>
                    </div>
                </div>
            </div>
            <div class="download-resume">
                <a>Download Resume</a>
            </div>

        </section>
	</main><!-- #main -->
</div><!-- #primary -->
<div class="instagram">
	<h2> Being a human</h2>
	<ul id="instagram-grid"></ul>
	<div class="modal-background"> <!-- modal start (position:fixed)-->
		<i id="close-icon" class="material-icons close-icon">clear</i>
		<div class="modal-inner">
			<div id="image-wrap" class="image-wrap"></div>
			<div class="pic-details">
				<div class="user-caption-wrap">
					<div class="user-info">
						<div class="profile-pic"></div>
						<div class="user-location">
							<a class="username"
								href="https://www.instagram.com/missamandawong/"
								target="_blank">
									missamandawong
							</a>
							<p class="location"></p>
						</div>
					</div>
					<p class="caption"></p>
				</div>
				<div class="likes-date">
					<p class="likes"></p>
					<p class="date-created"></p>
				</div>
			</div>
		</div>
	</div><!-- modal end -->
</div>

<?php get_footer(); ?>
