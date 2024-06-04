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
 * This function is being used to conditionally display the tab style according to the URI(PATH) in the navbar;
 */
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === "$value";
}
