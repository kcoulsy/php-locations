<?php

/**
 * Get the current location for the page, pass in the part of the url to remove
 * 
 * Example:
 * 
 * Path is /halifax-some-page
 * 
 * getLocation('-some-page') will return 'halifax'
 * 
 * @param string $path_to_remove
 * @return string
 */
function getLocation($path_to_remove = '')
{
  $request_uri = $_SERVER['REQUEST_URI'];

  $location = str_replace('/', '', $request_uri);
  $location = str_replace($path_to_remove, '', $location);
  $location = ucwords($location);
  $location = htmlentities($location);

  return $location;
}

/**
 * Short command to prevent XSS attacks
 */
function esc($string)
{
  return htmlentities($string);
}

// Helpers here serve as example. Change to suit your needs.
const VITE_HOST = 'http://localhost:5133';

// For a real-world example check here:
// https://github.com/wp-bond/bond/blob/master/src/Tooling/Vite.php
// https://github.com/wp-bond/boilerplate/tree/master/app/themes/boilerplate

// you might check @vitejs/plugin-legacy if you need to support older browsers
// https://github.com/vitejs/vite/tree/main/packages/plugin-legacy



// Prints all the html entries needed for Vite

function vite(string $entry): string
{
  return "\n" . jsTag($entry)
    . "\n" . jsPreloadImports($entry)
    . "\n" . cssTag($entry);
}


// Some dev/prod mechanism would exist in your project

function isDev(string $entry): bool
{
  return !(isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'production');
}


// Helpers to print tags

function jsTag(string $entry): string
{
  $url = isDev($entry)
    ? VITE_HOST . '/' . $entry
    : assetUrl($entry);

  if (!$url) {
    return '';
  }
  return '<script type="module" crossorigin src="'
    . $url
    . '"></script>';
}

function jsPreloadImports(string $entry): string
{
  if (isDev($entry)) {
    return '';
  }

  $res = '';
  foreach (importsUrls($entry) as $url) {
    $res .= '<link rel="modulepreload" href="'
      . $url
      . '">';
  }
  return $res;
}

function cssTag(string $entry): string
{
  // not needed on dev, it's inject by Vite
  if (isDev($entry)) {
    return '';
  }

  $tags = '';
  foreach (cssUrls($entry) as $url) {
    $tags .= '<link rel="stylesheet" href="'
      . $url
      . '">';
  }
  return $tags;
}


// Helpers to locate files

function getManifest(): array
{
  $content = file_get_contents(__DIR__ . '/assets/dist/manifest.json');
  return json_decode($content, true);
}

function assetUrl(string $entry): string
{
  $manifest = getManifest();

  return isset($manifest[$entry])
    ? '/assets/dist/' . $manifest[$entry]['file']
    : '';
}

function importsUrls(string $entry): array
{
  $urls = [];
  $manifest = getManifest();

  if (!empty($manifest[$entry]['imports'])) {
    foreach ($manifest[$entry]['imports'] as $imports) {
      $urls[] = '/assets/dist/' . $manifest[$imports]['file'];
    }
  }
  return $urls;
}

function cssUrls(string $entry): array
{
  $urls = [];
  $manifest = getManifest();

  if (!empty($manifest[$entry]['css'])) {
    foreach ($manifest[$entry]['css'] as $file) {
      $urls[] = '/assets/dist/' . $file;
    }
  }
  return $urls;
}