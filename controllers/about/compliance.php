<?php
$title = 'Compliance';
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

			<div class="project-detail-construction">

				<h3>O<small class="text-muted">ur compliance as a company is fully committed to health and safety and take our duty of care seriously</small></h3>

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


</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
