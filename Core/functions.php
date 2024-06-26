<?php

use Core\Response;

/**
 * Dev Tool for debug the application
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === "$value";
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

/**
 * the root directory of the system 
 */
function base_path($path)
{
    return BASE_PATH . $path;
}

/**
 * Simplifying they way of required the views directory
 */
function view($path, $attributes = [])
{
    extract($attributes);
    require base_path("views/{$path}", $attributes);
}
