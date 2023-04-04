<?php
// $location = ucwords($location);
$location = $website_name;

$current_service = 'Fire Door Services';

// $title = $location . ' ' . $current_service;
$title = $location . ' ' . $current_service;

// $meta_desc = $location . ' ' . $current_service;
$meta_desc = $location . ' ' . $current_service;

require 'includes/head.php';

require 'includes/header.php';

?>
<div class="container mt-5">

    <div class="row">

        <div class="col-md-8 col-lg-8">

            <div class="row">

                <?php require 'includes/carousel.php'; ?>

            </div>

            <div class="row">

                <?php require 'views/partials/our.php'; ?>

            </div>

        </div>

        <div class="col-lg-4 col-md-4">

            <div class="row flex-column pb-lg-2">

                <?php require 'includes/contact-form.php'; ?>

            </div>

        </div>

    </div>

</div> <!-- container -->

<?php 

require 'views/partials/who-are-we.php'; 

require 'views/partials/why-fire-doors.php'; 

require 'views/partials/fire-door-failures.php'; 

require 'views/partials/our-services.php'; 

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
