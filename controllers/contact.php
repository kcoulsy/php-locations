<?php
$title = 'Contact Us';
$meta_desc = 'Contact Us - this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

// This variable is used in the footer to add google recaptcha
$has_contact_form = true;

?>

<div class="container">

	<div class="row mt-5 mb-4">
		<div class="col">
			<h1>
				<?= $title ?>
			</h1>
		</div>
	</div>


	<div class="row py-4">
		<div class="col-lg-6">

			<h2 class="font-weight-bold text-8 mt-2 mb-0">Contact Us</h2>
			<p class="mb-4">Feel free to ask for details, don't save any questions!</p>

			<form id="contact-form" class="contact-form" action="submit-form" method="POST">
				<div id="contact-success-alert" class="contact-form-success alert alert-success d-none mt-4">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div id="contact-error-alert" class="contact-form-error alert alert-danger d-none mt-4">
					<strong>Error!</strong> There was an error sending your message.
					<span class="mail-error-message text-1 d-block"></span>
				</div>

				<div class="row">
					<div class="form-group col-lg-6">
						<label class="form-label mb-1 text-2">Full Name</label>
						<input id="name" type="text" value="" data-msg-required="Please enter your name." maxlength="100"
							class="form-control text-3 h-auto py-2" name="name" required>
					</div>
					<div class="form-group col-lg-6">
						<label class="form-label mb-1 text-2">Email Address</label>
						<input id="form-email" type="email" value="" data-msg-required="Please enter your email address."
							data-msg-email="Please enter a valid email address." maxlength="100"
							class="form-control text-3 h-auto py-2" name="email" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label class="form-label mb-1 text-2">Phone</label>
						<input id="form-phone" type="text" value="" data-msg-required="Please enter your phone number"
							maxlength="100" class="form-control text-3 h-auto py-2" name="phone" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label class="form-label mb-1 text-2">Message</label>
						<textarea id="form-message" maxlength="5000" data-msg-required="Please enter your message." rows="8"
							class="form-control text-3 h-auto py-2" name="message" required></textarea>
					</div>
				</div>
				<input type="hidden" class="d-none" name="site_location" id="site_location" value="<?= $url_string ?>" />
				<input type="hidden" name="recaptcha_value" id="recaptcha_value" value="" />

				<div class="row">
					<div class="form-group col">
						<input id="submit-form" type="submit" value="Send Message" class="btn btn-primary btn-modern"
							data-loading-text="Loading...">
					</div>
				</div>
			</form>

		</div>
		<div class="col-lg-6">

			<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
				<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
				<ul class="list list-icons list-icons-style-2 mt-2">
					<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234 Street Name,
						City Name, United States</li>
					<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
					<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a
							href="mailto:mail@example.com">mail@example.com</a></li>
				</ul>
			</div>

			<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
				<h4 class="pt-5">Business <strong>Hours</strong></h4>
				<ul class="list list-icons list-dark mt-2">
					<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
					<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
					<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
				</ul>
			</div>

			<h4 class="pt-5">Get in <strong>Touch</strong></h4>
			<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit
				imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur
				adipiscing elit.</p>

		</div>

	</div>







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
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="Enter full name please">
					<small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="email@example.com">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>

				<div class="form-group">
					<label for="exampleTextarea" class="form-label mt-4">Brief subject</label>
					<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject."
						maxlength="100" class="form-control" name="subject" id="subject" required>
				</div>

				<div class="form-group">
					<label for="exampleTextarea" class="form-label mt-4">Message</label>
					<textarea maxlength="5000" placeholder="I would like assistance with..."
						data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message"
						required></textarea>
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
					<p class="text-4 mb-0">
						<?php echo $address_line_1; ?><br>
						<?php echo $address_line_2; ?><br>
						<?php echo $address_line_3; ?><br>
						<?php echo $address_line_4; ?>
					</p>
				</li>
				<li><i class="icon-call-end icons"></i> <strong>Phone:</strong>
					<p class="text-4 mb-0">
						<?php echo $phone_landline; ?>
					</p>
				</li>
				<li><i class="icon-envelope icons"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">
						<?php echo $email_main; ?>
					</a></li>
			</ul>

		</div>

	</div>



</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';