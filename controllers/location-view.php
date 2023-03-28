<?php
$title = 'this is a custom title';
$meta_desc = 'this is a custom meta description';

require 'includes/head.php';

require 'includes/header.php';

?>

    <div class="row">
        
        <div class="col-xl-8 mt-lg-5 mt-xl-0">

            <h2><?php echo ucfirst($location) .' '. $current_service; ?></h2>

            <p>Hello, I'm Robert and I'd like to welcome you to Coulsy <?php echo $current_service . ' in ' . $location_name; ?>.</p>
        
        </div>

        <div class="col-xl-4 our-services">

            <h4>Contact us today: <?php echo $phone_landline; ?></h4>

            <div class="row flex-column pb-lg-5">

                <?php require 'includes/contact-form.php'; ?>

            </div>

        </div>

    </div>


<?php 

require 'includes/footer-nav.php';

require 'includes/footer.php'; 

?>