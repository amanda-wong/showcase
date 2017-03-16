<?php
/**
 * Template Name: About Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php get_header(); ?>
        <section class="canvas">
			<h1>Hi! I'm Amanda, It's nice to meet you!</h1>
            <div class="about-info">
				<div class="about-intro">
					<p>
						I enjoy bringing designs to life, filling in all the
						intricacies that makes an impressionable piece.
						My passion for web development comes from a love of design,
						complex problems and creativity. On my spare time you’ll find
						me fishing, camping, snowboarding or working on my side project.
					</p>
					<div class="random-facts">
						<h2>Random Facts</h2>
						<ul class="fact-list">
							<li>I love pasta and can eat mountains of it.</li>
							<li>I am the all time biggest F.R.I.E.N.D.S fan.</li>
							<li>I listen to nothing but electronic music.</li>
							<li>I twirl my hair A LOT and unintentionally use it as a mustache.</li>
							<li>I never considered myself a gamer until I played Skyrim.</li>
							<li>I aim to be a full-stack web developer one day.</li>
							<li>I feel so guilty if I don't compost or recycle.</li>
						</ul>
					</div>
				</div>

				<div class="amanda-image-wrap">
					<img src="../wp-content/themes/showcase/build/assets/images/amanda.jpg"
						class="about-image" alt="amanda image"/>
				</div>
            </div>

            <div class="skills-container">
				<h2>Technical Skills</h2>
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
                        <div class="skill-level" data-percent="25.1%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-label">
                        PosgreSQL
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="20%"></div>
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
                       	<i class="fa fa-info-circle" aria-hidden="true" title="Passion and willingness to learn"></i>
						<div class="info-text">Passion and the willingness to learn</div>
						P++
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" data-percent="100%"></div>
                    </div>
                </div>
            </div>
			<a class="resume-link"
				href="../wp-content/themes/showcase/build/assets/images/
				Amanda Wong - Resume.pdf"
				target="_blank"
				title="Download Amanda Wong's resume in PDF">Download Resume</a>
        </section>
	</main><!-- #main -->
</div><!-- #primary -->
<div class="instagram">
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
