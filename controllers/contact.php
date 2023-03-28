<?php
$title = 'Contact Us';
$meta_desc = 'Contact Us - this is a custom meta description';

include_once 'includes/head.php';

include_once 'includes/header.php';

?>

<body data-spy="scroll" data-target="#sidebar" data-offset="120">

	<div class="body">


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

						<form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
							<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="submit" value="Send Message" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
								</div>
							</div>
						</form>

					</div>
					<div class="col-lg-4 col-lg-offset-1">

						<h4 class="text-color-dark mb-1 pb-3">Office - Workshop</h4>

						<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
						<div id="googlemaps" class="google-map small"></div>

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


	</div>

	<!-- Vendor -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="vendor/popper/umd/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/common/common.min.js"></script>
	<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
	<script src="vendor/isotope/jquery.isotope.min.js"></script>
	<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/vide/jquery.vide.min.js"></script>
	<script src="vendor/vivus/vivus.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="vendor/nivo-slider/jquery.nivo.slider.min.js"></script>
	<script src="js/views/view.contact.js"></script>

	<!-- Demo -->
	<script src="js/demos/demo-construction.js"></script>

	<!-- Theme Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>


	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
	<script>
		/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

		// Map Markers
		var mapMarkers = [{
			address: "address",
			html: "<strong>Office - Workshop</strong><br>Bradshaw, Halifax",
			icon: {
				image: "img/pin.png",
				iconsize: [26, 46],
				iconanchor: [12, 46]
			},
			popup: true
		}];

		// Map Initial Location
		var initLatitude = 53.762153;
		var initLongitude = -1.882203;

		// Map Extended Settings
		var mapSettings = {
			controls: {
				draggable: (($.browser.mobile) ? false : true),
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: true,
				overviewMapControl: true
			},
			scrollwheel: false,
			markers: mapMarkers,
			latitude: initLatitude,
			longitude: initLongitude,
			zoom: 16
		};

		var map = $('#googlemaps').gMap(mapSettings),
			mapRef = $('#googlemaps').data('gMap.reference');

		// Map text-center At
		var mapCenterAt = function(options, e) {
			e.preventDefault();
			$('#googlemaps').gMap("centerAt", options);
		}

		// Create an array of styles.
		var mapColor = "#cfa968";

		var styles = [{
			stylers: [{
				hue: mapColor
			}]
		}, {
			featureType: "road",
			elementType: "geometry",
			stylers: [{
				lightness: 0
			}, {
				visibility: "simplified"
			}]
		}, {
			featureType: "road",
			elementType: "labels",
			stylers: [{
				visibility: "off"
			}]
		}];

		var styledMap = new google.maps.StyledMapType(styles, {
			name: 'Styled Map'
		});

		mapRef.mapTypes.set('map_style', styledMap);
		mapRef.setMapTypeId('map_style');
	</script>


	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


</body>


<?php 

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php'; 

?>