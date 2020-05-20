
<?php
    $title = 'this is a custom title';
    $meta_desc ='this is a custom meta description';

    include_once 'includes/head.php'; 

    include_once 'includes/header.php';
?>
<div class="jumbo">
    <img src="<?php echo $base_url ?>libs/images/rooftop.jpg" alt="<?php echo $title ?>">
</div>
<div class="content">
    <div class="row">
        <div class="col-xl-8 mt-lg-5 mt-xl-0">
            <h2><?php echo ucfirst($location); ?> Windows</h2>
            <p>Hello, I'm Robert and I'd like to welcome you to Coulsy <?php echo $current_product .' '.$location_name; ?>.</p>
        </div>
        <div class="col-xl-4 our-services">
            <h4>Contact us today: <?php echo $phone_landline; ?></h4>
            <div class="row flex-column pb-lg-5">
                <?php include_once 'includes/contact-form.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer-nav.php'; ?>
<?php include_once 'includes/footer.php'; ?>
