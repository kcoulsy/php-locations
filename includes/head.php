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
   <!-- <link rel="stylesheet" href="<?php //$base_url; ?>assets/fontawesome-free/css/all.min.css"> -->


    <!-- Web Fonts  -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css>
    <link rel="stylesheet" href="assets/vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="assets/css/custom.min.css">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23019901-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23019901-1');
    </script>
  <script id="_carbonads_projs" type="text/javascript" src="https://srv.carbonads.net/ads/CKYIE23N.json?segment=placement:bootswatchcom&amp;callback=_carbonads_go"></script></head>     -->
</head>
<body>


