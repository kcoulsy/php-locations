<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'config.php';
require 'routes.php';
require 'helpers.php';
require 'router.php';