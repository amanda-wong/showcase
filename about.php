<?php
/**
 * Template Name: About Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php get_header(); ?>
        <section class="canvas">
            <div class="about-copy">
            </div>
            <div class="instagram">
				<h2>Amanda being a human</h2>
                <ul id="instagram-grid"></ul>
				<div class="modal-background">
					<i id="close-icon" class="material-icons close-icon">clear</i>
					<div class="modal-inner">
						<div id="image-wrap" class="image-wrap"></div>
						<div class="pic-details">
							<div class="user-info">
								<div class="profile-pic">
								</div>
								<div class="user-location">
									<p class="username">missamandawong</p>
									<p class="location"></p>
								</div>
							</div>
							<p id="caption"></p>
							<p class="likes"></i></p>
						</div>
					</div>
				</div>
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

<?php get_footer(); ?>
