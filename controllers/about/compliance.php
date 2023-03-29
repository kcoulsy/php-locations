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


	<div class="row justify-content-around mb-5 mt-5">

		<div class="col-lg-5">

			<div class="project-detail-construction">

				<h3>Our<small class="text-muted"> compliance as a company is fully committed to health and safety and take our duty of care seriously</small></h3>

				<p class="lead mt-4">Insurance</p>
				<p>
				Public liability <a href="#">&nbsp;<i class="bi bi-download"></i></a>
				<br>
				Employers liability <a href="#">&nbsp;<i class="bi bi-download"></i></a>
				</p>

				<p class="lead mt-4">Regulations</p>
				<p>Fire safety regulations England 2022<br>
					Construction (Design and Management) Regulations 2015<br>
					Health & Safety at Work Act 1974<br>
					Management of Health & Safety at Work Regulations 1999<br>
					Control of Substances Hazardous to Health Regulations (COSHH) 2002
				</p>

				<p class="lead mt-4">Policies</p>
				<p>Risk assesments<br>Method statements<br>Equality</p>

			</div>
		</div>

		<div class="col-lg-5">
			<img src="assets/images/compliance.jpeg" class="img-fluid mx-auto d-block mb-4" alt="Responsive image">
		</div>


	</div>



</div>





<?php

require 'includes/footer-nav.php';

require 'includes/footer.php';
