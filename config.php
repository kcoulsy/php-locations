<?php

$base_url = 'http://localhost/php-locations/';

$homepage_template = 'controllers/home.php';
$pagenotfound_template = 'controllers/404.php';

$locations = [
    'halifax',
    'bradshaw',
    'leeds',
    'bradford',
    'bingley',
    'bramhope',
    'brighouse',
    'guiseley',
    'harrogate',
    'horsforth',
    'ilkley',
    'manchester',
    'skipton',
    'otley',
    'bath',
    'birmingham',
    'bradford',
    'brighton-and-hove',
    'bristol',
    'cambridge',
    'canterbury',
    'carlisle',
    'chelmsford',
    'chester',
    'chichester',
    'colchester',
    'coventry',
    'derby',
    'doncaster',
    'durham',
    'ely',
    'exeter',
    'gloucester',
    'hereford',
    'kingston-upon-hull',
    'lancaster',
    'leeds',
    'leicester',
    'lichfield',
    'lincoln',
    'liverpool',
    'london',
    'manchester',
    'milton-Keynes',
    'newcastle-upon-tyne',
    'norwich',
    'nottingham',
    'peterborough',
    'plymouth',
    'portsmouth',
    'preston',
    'ripon',
    'salford',
    'salisbury',
    'sheffield',
    'southampton',
    'southend-on-sea',
    'st-albans',
    'stoke-on-trent',
    'sunderland',
    'truro',
    'wakefield',
    'wells',
    'westminster',
    'winchester',
    'wolverhampton',
    'worcester',
    'york'
    ];

    
$service_services_url = 'fire-door-services';
$service_inspectors_url = 'fire-door-inspectors';
$service_installers_url = 'fire-door-installers';

// (location) is replaced with the locations in $locations.
$routes = [
    '(location)-'.$service_services_url.'' => 'controllers/location-view.php',
    '(location)-'.$service_inspectors_url.'' => 'controllers/services/fire-door-inspectors.php',
    '(location)-'.$service_installers_url.'' => 'controllers/services/fire-door-installers.php',
    'showcase' => 'controllers/showcase.php',
    'about' => 'controllers/about/about.php',
    'qualifications' => 'controllers/about/qualifications.php',
    'compliance' => 'controllers/about/compliance.php',
    'sustainability' => 'controllers/about/sustainability.php',
    'contact' => 'controllers/contact.php',
    'areas-covered' => 'controllers/areas-covered.php',
    'projects' => 'controllers/projects.php',
    'fire-door-installers' => 'controllers/services/fire-door-installers.php',
    'fire-door-maintenance' => 'controllers/services/fire-door-maintenance.php',
    'property-maintenance' => 'controllers/services/property-maintenance.php'
];

// $location_name is also exposed from the (location) above

// Google Recaptcha details
$recaptcha_secret = '6Ldb4TwlAAAAAEMA78R_ZML8js83UW4Yoei7tw7N';
$recaptcha_api_key = '6Ldb4TwlAAAAAGfyM26SE0__awmw7Ts3KCGNmTgP';
$host_name = '127.0.0.1';

// Form details
$contact_form_to = "info@coulsy.co.uk";
$contact_form_from = "robert@coulsy.co.uk";

// You can override these on the controllers by setting $title or $meta_desc before including head.php
$default_title = 'Coulsy';
$default_meta_desc = 'Coulsy Meta Description';

$meta_author = 'Coulsy';
$meta_image = $base_url . '';


$current_pro = $meta_author .' '. $current_product;

$address_line_1 = 'Great Scausby Barn';
$address_line_2 = 'Bradshaw';
$address_line_3 = 'Halifax';
$address_line_4 = 'HX2 9UR';

$contact_name_1 = 'Robert';
$phone_mobile_1 = '07544 030486';
$contact_name_2 = '';
$phone_mobile_2 = '';

$email_main = 'robert@coulsy.co.uk';

// COPYRIGHT ---------------------------------------------------------------------
$copyright				=	'Copyright &copy; 2023 - Coulsy '. $current_product .'  &trade; - All rights reserved';
$developer				=	'Designed &amp; Maintained By <a href="http://coulsy.co.uk" target="_blank">Coulsy&trade;</a> - W3C';

$social_link_insta = '#';
$social_link_twitter = '#';
$social_link_facebook = '#';
$social_link_linkedin = '#';