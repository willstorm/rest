<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\RouteCollection;
use Silex\Application;

$app = new Application();
$app['debug'] = true;
$app['routes'] = $app->extend('routes', function (RouteCollection $routes, Application $app) {
    if($modules = glob(__DIR__ . '/../src/*/Resource')) {
        foreach($modules as $module) {
            $loader = new YamlFileLoader(new FileLocator($module));
            $routes->addCollection($loader->load('route.yml'));
        }
    }
    return $routes;
});
$app->run();