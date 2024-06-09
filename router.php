<?php
$config = require('config.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = $config['routes'];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
