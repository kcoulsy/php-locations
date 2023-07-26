<?php
$title = 'Our Sustainability';
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

				<p class="lead mt-4">Environmental and pollution prevention</p>
				<p>The director recognises day to day operations of the business will impact on the environment, however, we will strive to minimise the potentially harmful effects of any such activity wherever and whenever practicable.<br>Initiatives that reduce the carbon footprint of the business.</p>

				<p class="lead mt-4">Legislative and regulatory compliance</p>
				<p>Environmental regulations, laws and codes of practice will be regarded as setting the minimum standards of environmental performance.
					Where there is not law for a specific task, we will take initiative for the most environmentally process to complete its tasks and record them accordingly.</p>

				<p class="lead mt-4">Communincation to our staff</p>
				<p>Our employee involvement in environmental matters is encouraged and will be promoted through training, communications and a constant reappraisal of working methods and techniques.</p>

				<p class="lead mt-4">Social</p>
				<p>We actively have initiatives promoting the wellbeing, health and safety of communities, customers, our clients and employees.</p>

				<!-- <p class="lead mt-4"><a href="#" target="" >Our Environmental policy download</a></p> -->
			</div>
		</div>

		<div class="col-lg-5">
			<img src="assets/images/sustainability_logo.svg" class="img-fluid mx-auto d-block mb-4" alt="Responsive image">
		</div>


	</div>




</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
