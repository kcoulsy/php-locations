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
    <title>
        <?= $title ?>
    </title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/site.webmanifest">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
        type="text/css">

    <?= vite('assets/js/main.js') ?>
</head>

<body>