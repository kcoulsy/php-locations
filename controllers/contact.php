<?php
$title = 'Contact Us';
$meta_desc = 'Contact Us - this is a custom meta description';

include_once 'includes/head.php';

include_once 'includes/header.php';

?>



<div role="main" class="main">
	<section class="section section-tertiary section-no-border pb-3 mt-0">
		<div class="container">
			<div class="row justify-content-end mt-4">
				<div class="col-lg-10 pt-4 mt-4 text-right">
					<h1 class="text-uppercase font-weight-light mt-4 pt-3 text-color-primary">Contact</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pt-4 mb-4">
			<div class="col-lg-7">

				<h2 class="mb-0">Send Us a Message</h2>

				<p class="lead mb-4 mt-1">Contact us or give us a call to discover how we can help.</p>

				<form id="contactForm" class="contact-form" action="submit-form.php" method="POST">

					<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
						<strong>Success!</strong> Your message has been sent to us.
					</div>

					<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
						<strong>Error!</strong> There was an error sending your message.
						<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label mt-4">Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name please">
						<small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>

					<div class="form-group">
						<label for="exampleTextarea" class="form-label mt-4">Brief subject</label>
						<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
					</div>

					<div class="form-group">
						<label for="exampleTextarea" class="form-label mt-4">Message</label>
						<textarea maxlength="5000" placeholder="I would like assistance with..." data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<button type="submit" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">Submit</button>
						</div>
					</div>
			</form>

		</div>
		<div class="col-lg-4 col-lg-offset-1">

			<h4 class="text-color-dark mb-1 pb-3">Office - Workshop</h4>

			<ul class="list list-icons mt-4 mb-4">
				<li><i class="icon-pin icons"></i> <strong>Address:</strong>
					<p class="text-4 mb-0"><?php echo $address_line_1; ?><br>
						<?php echo $address_line_2; ?><br>
						<?php echo $address_line_3; ?><br>
						<?php echo $address_line_4; ?>
					</p>
				</li>
				<li><i class="icon-call-end icons"></i> <strong>Phone:</strong>
					<p class="text-4 mb-0"><?php echo $phone_landline; ?></p>
				</li>
				<li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"><?php echo $email_main; ?></a></li>
			</ul>

		</div>
	</div>

</div>
</div>

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';

?>