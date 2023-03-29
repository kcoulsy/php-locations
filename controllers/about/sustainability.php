<?php
$title = 'Sustainability';
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

				<h3>UN.org<small class="text-muted"> “meeting the needs of the present without compromising the ability of future generations to meet their own needs.”</small></h3>

				<p class="lead mt-4">Environmental and pollution prevention</p>
				<p>The director recognises day to day operations of the business will impact on the environment, however, we will strive to minimise the potentially harmful effects of any such activity wherever and whenever practicable.<br>Initiatives that reduce the carbon footprint of the business.</p>

				<p class="lead mt-4">Legislative and regulatory compliance</p>
				<p>Environmental regulations, laws and codes of practice will be regarded as setting the minimum standards of environmental performance.
					Where there is not law for a specific task, we will take initiative for the most environmentally process to complete its tasks and record them accordingly.</p>

				<p class="lead mt-4">Communincation to our staff</p>
				<p>Our employee involvement in environmental matters is encouraged and will be promoted through training, communications and a constant reappraisal of working methods and techniques.</p>

				<p class="lead mt-4">Social</p>
				<p>Initiatives promoting the wellbeing, health and safety of communities, customers and employees.</p>

			</div>
		</div>

		<div class="col-lg-5">
			<img src="assets/images/sustainability_logo.svg" class="img-fluid mx-auto d-block mb-4" alt="Responsive image">
		</div>


	</div>



</div>

<?php

require 'includes/footer-nav.php';

require 'includes/footer.php';
