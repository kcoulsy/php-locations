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