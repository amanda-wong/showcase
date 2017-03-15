<?php
/**
 * Template Name: About Page
 */
  ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php get_header(); ?>
        <section class="canvas">
			<h1>Hi Nice to meet you!</h1>
            <div class="about-intro">
				<div class="about-intro-text">
					<p>I'm Amanda and I'm a Front-End Developer from Vancouver.</p>
					<p>
						I love taking a design, or even just
						I love
						My passion comes what you can get out of an idea. You
					</p>
				</div>

				<img src="../wp-content/themes/showcase/build/assets/images/amanda.jpg" alt="amanda image"/>
            </div>
			<div class="random-facts">
				<h2>Fun Facts</h2>
				<ul>
					<li>I love pasta and can eat mountains of it.</li>
					<li>I am the all time biggest F.R.I.E.N.D.S fan.</li>
					<li>I listen to nothing but electronic music.</li>
					<li>I twirl my hair A LOT, and unknowlingly use it as mustache :{o</li>
					<li>I have a weakness for live musicals.</li>
					<li>I strive to use my dev skills one day to 1.) help Vancouver's homeless problem
					 	and 2.) reduce the amount that goes into landfills.</li>
				</ul>

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
