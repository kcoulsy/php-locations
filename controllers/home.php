<?php
$title = 'Home';

$meta_desc = 'Home meta description';

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
    <h3 class="pb-2 border-bottom mt-4">Our sevices<small class="text-muted"> <?php if (isset($location)) echo 'within' . $location;
                                                                                else echo '' ?></small></h3>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-4">
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-door-open" style="font-size: 2rem; color: #18bc9c;"></i> Fire Door Inspection</h4>
            <p>The correct inspection of fire door and its frame...</p>
            <a href="#" class="">More about fire door inspection...</a>
        </div>
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-tools" style="font-size: 2rem; color: #18bc9c;"></i> Fire Door Installation</h4>
            <p>The correct installation of fire door assemblies and doorsets is fundamental to their overall performance because it will ensure the fire door will remain reliable to its fire integrity rating.</p>
            <a href="#" class="">More about fire door installation...</a>
        </div>
        <div class="feature col">
            <h4 class="fs-5"><i class="bi bi-door-closed" style="font-size: 2rem; color: #18bc9c;"></i> Fire Door Maintenance</h4>
            <p>We provide our clients with a proactive approach to property maintenance and complience. Please visit our Landlord Services page to see full details on what we can offer.</p>
            <a href="#" class="">More about our propety maintenance...</a>
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
