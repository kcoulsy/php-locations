<?php

$routes = [
  '/' => 'controllers/home.php',
  '/submit-form' => 'controllers/submit-form.php',
  '/showcase' => 'controllers/showcase.php',
  '/about' => 'controllers/about/about.php',
  '/qualifications' => 'controllers/about/qualifications.php',
  '/compliance' => 'controllers/about/compliance.php',
  '/sustainability' => 'controllers/about/sustainability.php',
  '/contact' => 'controllers/contact.php',
  '/areas-covered' => 'controllers/areas-covered.php',
  '/fire-door-inspectors' => 'controllers/services/fire-door-inspectors.php',
  '/areas-covered-fire-door-inspectors' => 'controllers/services/fire-door-inspectors-areas.php',
  '/fire-door-installers' => 'controllers/services/fire-door-installers.php',
  '/areas-covered-fire-door-installers' => 'controllers/services/fire-door-installers-areas.php',
  '/fire-door-maintenance' => 'controllers/services/fire-door-maintenance.php',
  '/areas-covered-fire-door-maintenance' => 'controllers/services/fire-door-maintenance-areas.php',
  '/fire-door-services' => 'controllers/services/fire-door-services.php',
  '/areas-covered-fire-door-services' => 'controllers/services/fire-door-services-areas.php',
  '/areas-covered-property-maintenance' => 'controllers/services/property-maintenance-areas.php',
  '/property-maintenance' => 'controllers/services/property-maintenance.php',
  '/projects' => 'controllers/projects.php'
];

foreach ($locations as $location) {
  $routes['/' . $location . '-fire-door-inspectors'] = 'controllers/services/fire-door-inspectors-area.php';
  $routes['/' . $location . '-fire-door-installers'] = 'controllers/services/fire-door-installers-area.php';
  $routes['/' . $location . '-fire-door-maintenance'] = 'controllers/services/fire-door-maintenance-area.php';
  $routes['/' . $location . '-fire-door-services'] = 'controllers/services/fire-door-services-area.php';
  $routes['/' . $location . '-property-maintenance'] = 'controllers/services/property-maintenance-area.php';
}

return $routes;