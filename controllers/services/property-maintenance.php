<?php
$location = ucfirst($location);
$title = $location . ' ' . $current_service;


$meta_desc = 'this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>
<div class="container">

    <div class="row mt-5 mb-4">
    <div class="col mt-4 ">
            <h1 class="fs-3">Welcome to <?= $location ?> property maintenance</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-md-8 col-lg-8">

            <div class="row">

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    </div>
                    <div class="carousel-inner rounded-3 shadow-lg">
                        <div class="carousel-item active">
                            <img src="assets/images/fire_door_keep_shut.jpeg" width="100%" height="100%" alt="<?= $location . ' ' . $current_service ?>">
                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>Example headline.</h1>
                                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/door-hanging-1.jpeg" width="100%" height="100%" alt="<?= $location . ' ' . $current_service ?>">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/door-closer-open.jpeg" width="100%" height="100%" alt="<?= $location . ' ' . $current_service ?>">
                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>One more for good measure.</h1>
                                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="row">

                <div class="container" id="">
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



<div class="container" id="">
    <h3 class="pb-2 border-bottom mt-4">Who are we? <small class="text-muted">We are <?= $location ?> fire door specialists.</small></h3>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-1">
        <div class="feature col">
            <p>We inspect, repair, supply and carry out the installallation of fire doors in the <?= $location ?> region.</p>
            <p>Fire exit doors are available in either to standard sizes or made to measure, double or single leaf in a range of different security specifications.</p>
            <p>Thanks to advances in technology, fire doors are now available in attractive designs and finishes. We are able to offer a wide range of fire doors.</p>
            <a href="about" class="">More information about us...</a>
        </div>
    </div>
</div>

<div class="container" id="">
    <h3 class="pb-2 border-bottom mt-4">Why fire doors? <small class="text-muted"><i class="bi bi-activity"></i> Protection</small></h3>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-1">
        <div class="feature col">
            <p>Buildings are compartmented to delay the spread of fire from one area to another. The compartments are usually linked by doors to allow for passage of traffic around the building.</p>
            <p>Doorsets have two important functions in a fire, when closed they form a barrier to fire spread and when open they provide a means of escape.</p>
            <p>All of our fire doors are tested and proven to the appropriate regulations, to provide you with absolute assurance that our doors are fit for purpose and gurantee your building's safety.</p>
            <a href="#" class="">More information about fire doors...</a>
        </div>
    </div>
</div>

<div class="container" id="">
    <h3 class="pb-2 border-bottom mt-4">Fire door <small class="text-muted"><i class="bi bi-clipboard-x"></i> Failures</small></h3>
    <div class="row g-4 py-3 row-cols-2 row-cols-lg-2">
        <div class="feature col">
            <ul>
                <li>Doors incorrectly fitted or damaged</li>
                <li>Incorrect Gap tollerances</li>
                <li>Doors not fully engaging</li>
                <li>Faulty door closers</li>
            </ul>
            <a href="#" class="">More about fire door failures...</a>
        </div>
        <div class="feature col">
            <ul>
                <li>Doors incorrectly fitted or damaged</li>
                <li>Incorrect/Faulty Furniture and Hinges</li>
                <li>Incorrect or damaged fire seals</li>
                <li>Glazing is the incorrect specification</li>
            </ul>
        </div>
    </div>
</div>


<div class="container" id="">
    <h3 class="pb-2 border-bottom mt-4">Our sevices<small class="text-muted"> within <?= $location ?></small></h3>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-door-open" style="font-size: 2rem; color: #18bc9c;"></i> Fire Door Installation</h4>
            <p>The correct installation of fire door assemblies and doorsets is fundamental to their overall performance because it will ensure the fire door will remain reliable to its fire integrity rating.</p>
            <a href="#" class="">More about fire door installation...</a>
        </div>
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-tools" style="font-size: 2rem; color: #18bc9c;"></i> Fire Door Maintenance</h4>
            <p>Maintaining a fire door is as critical as any other role in the lifecycle of a door for the fire safety of any building. It is important that fire doors are checked at least every 6 months.</p>
            <a href="#" class="">More about fire door maintenance...</a>
        </div>
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-buildings" style="font-size: 2rem; color: #18bc9c;"></i> Property Maintenance</h4>
            <p>We provide our clients with a proactive approach to property maintenance and complience. Please visit our Landlord Services page to see full details on what we can offer.</p>
            <a href="#" class="">More about our propety maintenance...</a>
        </div>
    </div>
</div>

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
