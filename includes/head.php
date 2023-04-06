<?php
    if (!isset($title)) {
        $title = $default_title;
    }

    if (!isset($meta_desc)) {
        $meta_desc = $default_meta_desc;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?= $meta_author ?>">
    <meta name="description" content="<?= $meta_desc ?>">
    <meta property="og:image" content="<?= $meta_image ?>">
    <meta property="og:description" content="<?= $meta_desc ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <title><?= $title ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">

    <!-- Web Fonts  -->

    <!-- Vendor CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" type="text/css">

    <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css" type="text/css">
    
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css" type="text/css">

    <link href="assets/css/carousel.css" rel="stylesheet" type="text/css">

</head>
<body>


