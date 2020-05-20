<?php

$base_url = 'http://127.0.0.1/coulsy/';

$homepage_template = 'templates/home.php';
$pagenotfound_template = 'templates/404.php';

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
    'otley'
];

// (location) is replaced with the locations in $locations.
$routes = [
    '(location)-windows' => 'templates/windows.php',
    'showcase' => 'templates/showcase.php',
    'about' => 'templates/about.php',
    'contact' => 'templates/contact.php',
    'areas-covered' => 'templates/areas-covered.php',
    'project' => 'templates/project.php'
];

// $location_name is also exposed from the (location) above

// Google Recaptcha details
$recaptcha_secret = '6LegdPAUAAAAAC7uLKfu18-ugKKwpvq3AYaRkCAa';
$recaptcha_api_key = '6LegdPAUAAAAANdfAjwAgL3sUq_kLCeAyUanvVib';
$host_name = '127.0.0.1';

// Form details
$contact_form_to = "robert@coulsy.co.uk";
$contact_form_from = "robert@coulsy.co.uk";

// You can override these on the templates by setting $title or $meta_desc before including head.php
$default_title = 'Coulsy';
$default_meta_desc = 'Coulsy Meta Description';

$meta_author = 'Coulsy';
$meta_image = $base_url . '';

$current_product = 'Windows';
$current_pro = $meta_author .' '. $current_product;

$address_line_1 = 'Great Scausby Barn';
$address_line_2 = 'Bradshaw';
$address_line_3 = 'Halifax';
$address_line_4 = 'HX2 9UR';

$phone_landline = '01422 000 000';
$phone_mobile_1 = '07544 030486';
$phone_mobile_2 = '07544 030486';

$email_main = 'robert@coulsy.co.uk';

// COPYRIGHT ---------------------------------------------------------------------
$copyright				=	'Copyright &copy; 2020 - Coulsy '. $current_product .'  &trade; - All rights reserved';
$developer				=	'Designed &amp; Maintained By <a href="http://coulsy.co.uk" target="_blank">Coulsy&trade;</a> - W3C';

$social_link_insta = '#';
$social_link_twitter = '#';
$social_link_facebook = '#';
$social_link_linkedin = '#';