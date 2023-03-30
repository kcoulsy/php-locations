<?php
$title = ucfirst($location) . ' ' . $current_service;;
$meta_desc = 'this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>

<div class="container">


    <div class="row mt-5 mb-5">
        <div class="col">
            <h1><?php echo ucfirst($location) . ' ' . $current_service; ?></h1>
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
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>Example headline.</h1>
                                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
                            </svg>
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
                <div class="col-lg-4 col-md-4">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis"><i class="bi bi-door-closed"></i> Fire Door Installation</h4>
                        <p>The correct installation of fire door assemblies and doorsets is fundamental to their overall performance because it will ensure the fire door will remain reliable to its fire integrity rating.</p>
                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis"><i class="bi bi-door-open"></i> Fire Door Maintenance</h4>
                        <p>Maintaining a fire door is as critical as any other role in the lifecycle of a door for the fire saftey of any building. It is important that fire doors are checked at least every 6 months</p>
                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis"><i class="bi bi-house-door-fill"></i> Property Maintenance</h4>
                        <p>We provide our clients with a proactive approach to property maintenance and complience. Please visit our Landlord Services page to see full details on what we can offer.</p>
                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis">Fire Door Specialist</h4>
                        <p>We are a Fire Door installation company. We are fire door specialists (supply and fitting). We can take care of any fire door installation. Please click here to see our Fire Door Installation services.</p>
                        <p>Fire exit doors are available in either to standard sizes or made to measure, double or single leaf in a range of different security specifications.</p>
                        <p>Thanks to technological advances, fire doors are now available in a number of attractive designs and finishes. We are therefore able to offer a wide range of fire doors that match many of our standard door ranges.</p>
                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis">So Why a New Fire Door?</h4>
                        <p>Buildings are compartmented to delay the spread of fire from one area to another. The compartments are usually linked by doors to allow for passage of traffic around the building.</p>
                        <p>Doorsets have two important functions in a fire, when closed they form a barrier to fire spread and when open they provide a means of escape.</p>
                        <p>All of our fire doors are tested and proven to the appropriate regulations, to provide you with absolute assurance that our doors are fit for purpose and gurantee your building's saftey.</p>
                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis">What Can We Do</h4>

                        <ul class="list-unstyled ps-1">
                            <li>Fire Door Maintenance & Repairs</li>
                            <li>Surveys</li>
                            <li>Assessments & Checks</li>
                            <li>6 month Inspections to RRO (Regulatory Reform Order)</li>
                            <li>Supply</li>
                            <li>Fitting</li>
                            <li>Installation</li>
                            <li>Fire Risk Assesments</li>
                        </ul>

                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bs-component">
                        <h4 class="text-body-emphasis">Common Fire Door Failures</h4>

                        <ul class="list-unstyled ps-1">
                            <li>Doors Incorrectly Fitted or Damaged</li>
                            <li>Incorrect Gaps</li>
                            <li>Doors Not Engaging</li>
                            <li>Faulty Door Closers</li>
                            <li>Incorrect/Faulty Furniture and Hinges</li>
                            <li>Damaged to Fire Seals</li>
                            <li>Incorrect Fire Seals</li>
                            <li>Glazing Not to Spec</li>
                        </ul>

                        <button class="source-button btn btn-primary btn-xs" type="button" tabindex="0"><i class="bi bi-code"></i></button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4 col-md-4">

            <h4 class="text-body-emphasis">Contact us today: <?php echo $phone_landline; ?></h4>

            <div class="row flex-column pb-lg-5">

                <?php require 'includes/contact-form.php'; ?>

            </div>

        </div>

    </div>


</div> <!-- container -->




<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
