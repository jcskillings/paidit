<?php

//require('../vendor/autoload.php');
include_once('../splash.html');
echo HttpRequest::getUrl;

//$app = fopen("../splash.html", "r") or die("Unable to open page");
//$app['debug'] = true;

// Register the monolog logging service
/*
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  //$app['monolog']->addDebug('logging output.');
  return 'Hello';
});

$app->run();
*/
?>
