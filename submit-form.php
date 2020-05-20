<?php


// this is a fake field hidden with css. If it has a value, a bot filled it in.
// Or no recaptcha value
if (isset($_POST['title']) || empty($_POST['recaptcha_value'])) {
    // returning to original page to prevent suspicion
    returnToPage(true);
}

$recaptcha_response = $_POST['recaptcha_value'];
$remote_ip = $_SERVER['REMOTE_ADDR'];

require_once 'libs/recaptcha-master/src/autoload.php';
$recaptcha = new \ReCaptcha\ReCaptcha($recaptcha_secret);

$resp = $recaptcha->setExpectedHostname($host_name)
                  ->verify($recaptcha_response, $remote_ip);

if ($resp->isSuccess() && validatePostParams()) {
    // Verified!
    if (sendEmail()) {
        returnToPage();
    } else {
        returnToPage(true);
    }
} else {
    $errors = $resp->getErrorCodes();
    returnToPage(true);
}


function validatePostParams() {
    if (empty($_POST['name'])) {
        return false;
    };
    if (empty($_POST['email'])) {
        return false;
    };
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        return false;
    };
    if (empty($_POST['message'])) {
        return false;
    };  
    return true;
}


function sendEmail() {
    $to = "kristiancoulson@gmail.com";
    $subject = "Contact Form Submission";

    $message = "
    <html>
    <head>
    <title>Contact Form Submission</title>
    </head>
    <body>
    <h4>Contact Form Submission</h4>
    <p>Name: " . $_POST['name'] . "</p>
    <p>Email: " . $_POST['email'] . "</p>
    <p>Phone: " . $_POST['phone'] . "</p>
    <p>Location: " . $base_url . $_POST['site_location'] . "</p>
    <p>Message: " . $_POST['message'] . "</p>
    </body>
    </html>
    ";

    // It is mandatory to set the content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers. From is required, rest other headers are optional
    $headers .= 'From: <' . $contact_form_from .'>' . "\r\n";

    return mail($contact_form_to, $subject, $message, $headers);
}

function returnToPage($withError = false) {
    // redirect back to the original page
    $url = '/';
    if (isset($_POST['site_location'])) {
        $url = $_POST['site_location'] . '/';
    }

    $url .= $withError ? 'error' : 'success';

    header('Location: ' . $base_url . $url);
    exit;
}