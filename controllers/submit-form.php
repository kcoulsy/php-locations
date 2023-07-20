<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// this is a fake field hidden with css. If it has a value, a bot filled it in.
// Or no recaptcha value
if (isset($_POST['title']) || empty($_POST['recaptcha_value'])) {
    returnResponse(true);
}

$recaptcha_response = $_POST['recaptcha_value'];
$remote_ip = $_SERVER['REMOTE_ADDR'];

require_once 'assets/recaptcha-master/src/autoload.php';
$recaptcha = new \ReCaptcha\ReCaptcha($_ENV['RECAPTCHA_SECRET_KEY']);

$resp = $recaptcha->setExpectedHostname($_SERVER['HTTP_HOST'])
    ->verify($recaptcha_response, $remote_ip);

if (
    validatePostParams()
    && $resp->isSuccess()
) {
    // Verified!
    if (sendEmail($base_url, $contact_form_from, $contact_form_to)) {
        returnResponse(true);
    } else {
        returnResponse(false, 'Unable to send email');
    }
} else {
    returnResponse(false, 'Recaptcha Failed');
}


function validatePostParams()
{
    if (empty($_POST['name'])) {
        return false;
    }
    ;
    if (empty($_POST['email'])) {
        return false;
    }
    ;
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    ;
    if (empty($_POST['message'])) {
        return false;
    }
    ;
    return true;
}



function sendEmail($base_url, $contact_form_from, $contact_form_to)
{
    $message = "
    <html>
    <head>
    <title>Contact Form Submission</title>
    </head>
    <body>
    <h4>Contact Form Submission</h4>
    <p>Name: " . esc($_POST['name'] ?? '') . "</p>
    <p>Email: " . esc($_POST['email'] ?? '') . "</p>
    <p>Phone: " . esc($_POST['phone'] ?? '') . "</p>
    <p>Location: " . $base_url . esc($_POST['site_location'] ?? '') . "</p>
    <p>Message: " . esc($_POST['message'] ?? '') . "</p>
    </body>
    </html>
    ";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $sendgrid = new SendGrid($_ENV['SENDGRID_API_KEY']);
        $email = new \SendGrid\Mail\Mail();


        $email->setFrom($_ENV['CONTACT_FROM_EMAIL'], "Contact Form");
        $email->addTo($_ENV['CONTACT_TO_EMAIL'], "Contact Form");
        $email->setSubject('Contact Form Submission from ' . esc($_POST['name']));
        $email->addContent(
            "text/plain",
            $message
        );
        $email->addContent(
            "text/html",
            $message
        );
        $response = $sendgrid->send($email);

        return true;
        // echo 'Message has been sent';
    } catch (Exception $e) {
        return false;
    }

}

function returnResponse($success = true, $errors = false)
{
    $response = [
        'params' => [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'message' => $_POST['message']
        ],
        'success' => $success
    ];

    if ($errors != false) {
        $response['errors'] = $errors;
    }

    echo json_encode($response);
    die;
}