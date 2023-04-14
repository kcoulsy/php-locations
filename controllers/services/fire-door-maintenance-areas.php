<?php
$title = 'Fire Door Maintenance - Areas Covered';
$meta_desc = 'Areas Covered - this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>

<div class="container">

    <div class="row mt-5 mb-4">
        <div class="col">
            <h1><?= $title ?></h1>
        </div>
    </div>


    <?php foreach ($locations as $dropdown_location) {
              echo '<a class="btn btn-primary btn-sm m-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Visit this area" href="' . $dropdown_location . '-' . $service_fd_maintenance_url . '">' . ucfirst($dropdown_location) . '</a>';
            } ?>

</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
