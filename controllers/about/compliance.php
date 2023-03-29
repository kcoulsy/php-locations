<?php
$title = 'Compliance';
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


	<div class="row mb-4">

		<div class="col-md-4 col-lg-4 mb-5 mb-lg-0 rounded-3 border shadow-sm">
			<img class="col-md-12 col-lg-12" src="assets/images/compliance.jpeg" class="img-fluid" alt="Responsive image">
		</div>

		<div class="col-lg-8">

			<div class="project-detail-construction">

				<h3><small class="text-muted">As a company we are committed to health and safety and take our duty of care seriously</small></h3>
				<p class="lead">Lorum</p>

				<div class="row">
					<div class="col-lg-5">

						<ul class="list-project-details">
							<li>
								<label>Insurance:</label>
								<p>
									<a href="#">Public liability</a><br>
									<a href="#">Employers liability</a>
								</p>
							</li>
							<li>
								<label>Regulations:</label>
								<p>Fire safety regulations England 2022<br>
									Construction (Design and Management) Regulations 2015<br>
									Health & Safety at Work Act 1974<br>
									Management of Health & Safety at Work Regulations 1999<br>
									Control of Substances Hazardous to Health Regulations (COSHH) 2002
								</p>
							</li>
							<li>
								<label>Policies:</label>
								<p>Risk assesments<br>Method statements<br>Equality</p>
							</li>
						</ul>

					</div>
					<div class="col-lg-7">
						<div class="progress-bars progress-bars-project-detail">
							<div class="progress-label">
								<span>General Progress</span>
							</div>
							<div class="progress progress-sm">
								<div class="progress-bar progress-bar-primary" data-appear-progress-animation="81%" style="width: 81%;">
									<span class="progress-bar-tooltip" style="opacity: 1;">81%</span>
								</div>
							</div>
							<div class="progress-label">
								<span>Phase 1</span>
							</div>
							<div class="progress progress-sm">
								<div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300" style="width: 85%;">
									<span class="progress-bar-tooltip" style="opacity: 1;">85%</span>
								</div>
							</div>
							<div class="progress-label">
								<span>Phase 2</span>
							</div>
							<div class="progress progress-sm">
								<div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600" style="width: 75%;">
									<span class="progress-bar-tooltip" style="opacity: 1;">75%</span>
								</div>
							</div>
							<div class="progress-label">
								<span>Phase 4</span>
							</div>
							<div class="progress progress-sm">
								<div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900" style="width: 85%;">
									<span class="progress-bar-tooltip" style="opacity: 1;">85%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


</div>

<?php

require 'includes/footer-nav.php';

require 'includes/footer.php';
