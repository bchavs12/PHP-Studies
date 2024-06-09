<?php

/**
 * Dev Tool to debug the application
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/**
 * aborting function depends on the status code
 */
function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

/**
 * This function is being used to conditionally display the tab style according to the URI(PATH) in the navbar;
 */
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === "$value";
}

/**
 * This function is use to authorize the user request based on a condition
 */
function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
