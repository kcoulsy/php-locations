<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
  if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'production') {

    //set headers to NOT cache a page
    // header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
    // header("Pragma: no-cache"); //HTTP 1.0
    // header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

    //or, if you DO want a file to cache, use:
    header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

    $cache = new PageCache\PageCache();
    $cache->config()
      ->setCachePath('/your/path/')
      ->setEnableLog(true);
    $cache->init();
  }
} catch (\Exception $e) {
  // Log PageCache error or simply do nothing.
  // In case of PageCache error, page will load normally, without cache.
}


require 'config.php';
require 'routes.php';
require 'helpers.php';
require 'router.php';