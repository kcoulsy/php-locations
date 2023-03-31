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
    'Bath',
    'Birmingham',
    'Bradford',
    'Brighton-and-Hove',
    'Bristol',
    'Cambridge',
    'Canterbury',
    'Carlisle',
    'Chelmsford',
    'Chester',
    'Chichester',
    'Colchester',
    'Coventry',
    'Derby',
    'Doncaster',
    'Durham',
    'Ely',
    'Exeter',
    'Gloucester',
    'Hereford',
    'Kingston-upon-Hull',
    'Lancaster',
    'Leeds',
    'Leicester',
    'Lichfield',
    'Lincoln',
    'Liverpool',
    'London',
    'Manchester',
    'Milton-Keynes',
    'Newcastle-upon-Tyne',
    'Norwich',
    'Nottingham',
    'Peterborough',
    'Plymouth',
    'Portsmouth',
    'Preston',
    'Ripon',
    'Salford',
    'Salisbury',
    'Sheffield',
    'Southampton',
    'Southend-on-Sea',
    'St-Albans',
    'Stoke-on-Trent',
    'Sunderland',
    'Truro',
    'Wakefield',
    'Wells',
    'Westminster',
    'Winchester',
    'Wolverhampton',
    'Worcester',
    'York'
    ];

    


$current_service = 'Fire Door Services ';
$current_service_url = 'fire-door-services';

// (location) is replaced with the locations in $locations.
$routes = [
    '(location)-'.$current_service_url.'' => 'controllers/location-view.php',
    'showcase' => 'controllers/showcase.php',
    'about' => 'controllers/about/about.php',
    'qualifications' => 'controllers/about/qualifications.php',
    'compliance' => 'controllers/about/compliance.php',
    'sustainability' => 'controllers/about/sustainability.php',
    'contact' => 'controllers/contact.php',
    'areas-covered' => 'controllers/areas-covered.php',
    'projects' => 'controllers/projects.php',
    'fire-door-inspection' => 'controllers/services/fire-door-inspection.php',
    'fire-door-installation' => 'controllers/services/fire-door-installation.php',
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