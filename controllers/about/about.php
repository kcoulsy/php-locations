<?php
$title = 'About';
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

    <h3>
        Hello and thank you for visiting us here at <?= BUSINESS_NAME ?></h3>
    <p>We are a small business of qualified joiners and carpenters who have associations with other specialist tradespersons.
    </p>

    <div class="row">

        <div class="col-lg-4">


            <div class="bs-component">
                <div class="card mb-3">
                    <h3 class="card-header">Qualified</h3>
                    <div class="card-body">
                        <h5 class="card-title">Skills</h5>
                        <h6 class="card-subtitle text-muted">Knowing we are the right team for you</h6>

                        <img class="" src="assets/images/bench-plane-frog_adobe_express.svg" class="img-fluid" alt="Responsive image">

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> CSCS Registered</li>
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Carpenters & Joiners</li>
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> City & Guilds ”Distinction Grades”</li>
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Advanced City & Guilds ”Distinction Grades”</li>
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Reach & Boom hydraulic lifts</li>
                        <li class="list-group-item"><i class="bi bi-clipboard2-check"></i> Asbestos Awareness</li>
                    </ul>
                    <div class="card-footer">
                        <a href="qualifications" class="card-link">View our qualifications</a>
                    </div>

                </div>
            </div>



        </div>

        <div class="col-lg-4">

            <div class="bs-component">
                <div class="card mb-3">
                    <h3 class="card-header">Compliance</h3>
                    <div class="card-body">
                        <h5 class="card-title">Legal</h5>
                        <h6 class="card-subtitle text-muted">The Fire Safety (England) Regulations 2022</h6>
                        <img src="assets/images/compliance.jpeg" class="img-fluid" alt="Responsive image">
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="bi bi-building-fill-check"></i> What the law requires?</li>
                        <li class="list-group-item"><i class="bi bi-building-fill-check"></i> Insurance</li>
                        <li class="list-group-item"><i class="bi bi-building-fill-check"></i> Health and Safety</li>

                    </ul>
                    <div class="card-body">
                        <a href="https://www.gov.uk/government/publications/fire-safety-england-regulations-2022-fire-door-guidance/fire-safety-england-regulations-2022-fire-door-guidance" class="card-link" target="_blank">Fire Safety Regulations 2022: fire door guidance</a>
                    </div>
                    <div class="card-footer">
                        <a href="compliance" class="card-link">View our compliance</a>
                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-4">
            <div class="bs-component">
                <div class="card mb-3">
                    <h3 class="card-header">CSCS</h3>
                    <div class="card-body">
                        <h4 class="card-title">CSCS registered</h4>
                        <p class="card-text">(CSCS) Construction Skills Certification Scheme is used to measure the different levels of qualifications between contractors. We have passed the construction skill health and safety test to obtain gold card status.</p>
                    </div>
                    <div class="card-footer">
                        <a href="qualifications" class="card-link">View our qualifications</a>
                    </div>

                </div>
            </div>
        </div>

    </div>



</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
