
<?php
    $title = 'About';
    $meta_desc = 'this is a custom meta description';

    include_once 'includes/head.php'; 
?>
<?php include_once 'includes/header.php' ?>

<div class="content">
    <h2>About</h2>
    <p>
        Hi and welcome to visiting our business website.
        We are a small business of qualified joiners and carpenters who have associations with other specialist tradespersons.
    </p>
    <section class="mt-5">
        <h5>Qualified</h5>
        <hr>
        <div class="row">
            <div class="col">
                Full Carpentry & Joinery Apprenticeship.”Bradford College”
                City & Guilds qualifications Gained.”Distinction Grades”
                Advanced City & Guilds qualifications Gained.”Distinction Grades”
                Reach & Boom hydraulic lifts
                Asbestos Awareness
            </div>
            <div class="col">
                <img class="float-right" src="<?php echo $base_url ?>libs/images/about_cityguilds.gif" alt="">
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h5>Health & Safety</h5>
        <hr>
        <div class="row">
            <div class="col">
                The health and safety of our clients, operatives and the public is our paramount concern and a strong emphasis is seriously followed.
                As a client, you can rest assured that we have met all the necessary health and safety standards to work within the law for the public and private sectors.
                We are happy to provide our pre tender risk assessments, Method statements and any other specific documentation that maybe required.
                Our site operatives receive full Health and safety competency training.
                Coulsy are fully insured and offer £5,000,000 employers liability and £10,000,000 public liability Insurance.
            </div>
            <div class="col">
                <img class="float-right" src="<?php echo $base_url ?>libs/images/about_company_sm.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h5>Compliance</h5>
        <hr>
        <div class="row">
            <div class="col">
            (CSCS) Construction Skills Certification Scheme is used to measure the different levels of qualifications between contractors. We have passed the construction skill health and safety test to obtain gold card status.
            </div>
            <div class="col">
                <img class="float-right" src="<?php echo $base_url ?>libs/images/about_cscs.gif" alt="">
            </div>
        </div>
    </section>
</div>

<?php include_once 'includes/footer-nav.php'; ?>
<?php include_once 'includes/footer.php'; ?>
