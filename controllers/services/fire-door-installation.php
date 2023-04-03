<?php
$location = ucfirst($location);
$title = $location . ' ' . $current_service;


$meta_desc = 'this is a custom meta description';

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

                <div class="container" id="">
                    <h1 class="fs-3">Welcome to <?= $location . ' ' . $current_service ?></h1>
                    <h3 class="pb-2 border-bottom mt-4">Our <small class="text-muted"><i class="bi bi-clipboard2-check"></i> services</small></h3>
                    <div class="row g-4 py-3 row-cols-2 row-cols-lg-2">
                        <div class="feature col">
                            <ul>
                                <li>Fire door maintenance and repairs</li>
                                <li>Surveys, assessments and checks</li>
                                <li>6 monthly inspections to RRO (Regulatory Reform Order)</li>
                            </ul>
                        </div>
                        <div class="feature col">
                            <ul>
                                <li>Supply and installation and fitting</li>
                                <li>Fire door inspections</li>
                                <li>Fire door risk assesments</li>
                            </ul>
                        </div>
                    </div>
                </div>


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
