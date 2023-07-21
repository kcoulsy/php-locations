<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
  if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'production') {

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