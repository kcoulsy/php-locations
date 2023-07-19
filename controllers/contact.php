<?php
$title = 'Contact Us';
$meta_desc = 'Contact Us - this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>

<div class="container">

	<div class="row mt-5 mb-4">
		<div class="col">
			<h1>
				<?= $title ?>
			</h1>
			<p class="lead mb-4 mt-1">Getting in touch is easy. We look forwards to hearing from you and being able to assist.</p>

		</div>
	</div>

	<div class="row pb-lg-2">

		<div class="col-lg-7 col-md-7">

			<?php require 'includes/contact-form-contact-page.php'; ?>

		</div>

		<div class="col-lg-5  col-md-5 col-lg-offset-1">
			<div class="card p-3">
				<h4 class="text-color-dark mb-1 pb-3">Office</h4>

				<ul class="list list-icons mt-4 mb-4">
					<p class="text-4 mb-0">

						<li style="list-style: none;"><i class="bi bi-buildings"></i> <?php echo $address_home; ?>
						</li>
					</p>
					<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-telephone"></i> <a href="tel:<?= $phone_mobile_1 ?>" style="text-decoration: none"><?= $phone_mobile_1 ?></a>
						</li>
					</p>
					<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-envelope"></i> <a href="mailto:mail@example.com"><?php echo $email_main; ?></a></li>
					</p>

				</ul>

			</div>
			<div class="card p-3 mt-4">
				<h4 class="text-color-dark mb-1 pb-3">Company details</h4>

				<ul class="list list-icons mt-4 mb-4">
				<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-card-checklist"></i> Registered Company : Coulsy Ltd
						</li>
					</p>
					<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-card-checklist"></i> Company number : 8575688
						</li>
					</p>
					<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-card-checklist"></i> Commenced trading : July 2013
						</li>
					</p>
					<p class="text-4 mb-0">
						<li style="list-style: none;"><i class="bi bi-card-checklist"></i> VAT : upon request
						</li>
					</p>

				</ul>

			</div>

		</div>

	</div>







</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
