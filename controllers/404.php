<?php
$location_name = '404 Page Not Found';

require 'includes/head.php';

require 'includes/header.php';

?>

<div class="container">

    <div class="row mt-5 mb-4">
        <div class="col">
            <h1><?= $location_name ?></h1>
        </div>
    </div>


    <h4>Oops... This page doesn't exist!</h4>



</div> <!-- container -->

<?php

include_once 'includes/footer-nav.php';

include_once 'includes/footer.php';
