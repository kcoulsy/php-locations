<?php
$title = 'Qualifications';
$meta_desc = 'this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php' ?>


<div role="main" class="main">

	<section class="page-header page-header-modern page-header-background bg-color-dark p-relative z-index-1 lazy-load-loaded" data-plugin-lazyload="" data-original="img/demos/digital-agency-2/bg/page-header-bg.jpg" style="background-image: url(&quot;img/demos/digital-agency-2/bg/page-header-bg.jpg&quot;); animation-duration: 1s;">
		<span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation animated" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
		<span class="custom-circle custom-circle-2 bg-color-primary appear-animation animated" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
		<span class="custom-circle custom-circle-3 bg-color-primary appear-animation animated" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
		<div class="container">
			<div class="row mt-5">
				<div class="col">
					<h1 class="custom-text-10 font-weight-bolder"><?= $title ?></h1>
				</div>
			</div>
		</div>
	</section>


	<div class="row justify-content-around mb-5 mt-5">

		<div class="col-lg-5">

			<div class="project-detail-construction">

				<h3><small class="text-muted">Rest assured that we are fully qualified</small></h3>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

				<div class="row">
					<div class="col-lg-12">

						<ul class="list-project-details">
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Trained carpenters & joiners</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> City & Guilds ”Distinction Grades”</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Advanced City & Guilds ”Distinction Grades”</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Level 3 Award in Fire Door Safety (6581)</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Reach & Boom hydraulic lifts</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Asbestos Awareness</li>
						</ul>

					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-5">
			<img src="assets/images/bench-plane-frog_adobe_express.svg" class="img-fluid mx-auto d-block mb-4" alt="Responsive image">
		</div>


	</div>
	<hr>
	<div class="row mb-5 mt-5 bt">

		<div class="col-md-4">
			<img src="assets/images/citb.png" class="img-fluid mx-auto d-block" alt="Responsive image">
		</div>
		<div class="col-md-4">
			<img src="assets/images/cscs_gold.png" class="img-fluid mx-auto d-block" alt="Responsive image">
		</div>
		<div class="col-md-4">
			<img src="assets/images/cityandguilds_logo.png" class="img-fluid mx-auto d-block" alt="Responsive image">
		</div>

	</div>



</div>

<?php

require 'includes/footer-nav.php';

require 'includes/footer.php';
