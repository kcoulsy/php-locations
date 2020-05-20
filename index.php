<?php

include_once 'config.php';


// all urls are redirected to index.php?url= in the htaccess
// i.e. website.com/this-is-a-slug  turns into website.com/index.php?url=this-is-a-slug
if (!isset($_GET['url'])) {
    $url_string = '';
} else {
    $url_string = $_GET['url'];
}

if ($url_string == 'submit-form') {
    include_once 'submit-form.php';
}

if (empty($url_string)) {
    include_once $homepage_template;
    return;
}

$success_pos = strpos($url_string, '/success');
$error_pos = strpos($url_string, '/error');

if ($success_pos) {
    $url_string = substr($url_string, 0, $success_pos);
}
if ($error_pos) {
    $url_string = substr($url_string, 0, $error_pos);
}



$valid_path = false;
$location_name = null;

foreach($routes as $route_path => $template_path) {
    foreach($locations as $location) {
        $path = str_replace('(location)', $location, $route_path);

        if ($path == $url_string) {
            $valid_path = true;   
            $location_name = ucfirst($location);
            include_once $template_path;
            break;
        }
    }

    if ($valid_path == true) {
        break;
    }
}

if (!$valid_path) {
    include_once $pagenotfound_template;
}