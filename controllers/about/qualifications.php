<?php
$title = 'Our Qualifications';
$meta_desc = 'this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>

<div class="container">

	<div class="row mt-5 mb-4">
		<div class="col">
			<h1><?= $title ?></h1>
		</div>
	</div>

	<div class="row justify-content-around mb-5 mt-5">

		<div class="col-lg-5">

			<div>

				<h3>R<small class="text-muted">est assured that we are fully qualified</small></h3>
				<p class="lead"></p>

				<div class="row">
					<div class="col-lg-12">
					<h5 class="mt-1">City and Guilds</h5>
						<ul class="list-project-details">
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Trained carpenters & joiners</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> City & Guilds ”Distinction Grades”</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Advanced City & Guilds ”Distinction Grades”</li>
						</ul>
						<hr>

						<h5 class="mt-1">(CSCS) certified</h5>
						<p>(CSCS) Construction Skills Certification Scheme is used to measure the different levels of qualifications between contractors.</p>
						<p>We have passed the construction skill health and safety test to obtain  <span style="color:#f39c12">gold</span> card status.</p>

						<hr>
						<h5 class="mt-1">Additional</h5>
						<ul>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Level 3 Award in Fire Door Safety (6581)</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Reach & Boom hydraulic lifts</li>
							<li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Asbestos Awareness</li>
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


</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
