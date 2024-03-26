<?php
// Parsing of the URI Declaration
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

/**
 * - HardCode Mode
 * if ($uri === '/') {
 *  require 'controllers/index.php'
 * }
 */

// Declaration of routes system
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

// A function to handle routing the URI tom one of those routes
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

// A option to abort with the given status code.
function abort($code = 404)
{
    http_response_code($code);

    require("views/{$code}.php");

    die();
}


routeToController($uri, $routes);
