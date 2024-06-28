<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function get($uri, $path)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $path,
            'method' => 'GET'
        ];
    }

    public function put($uri, $path)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $path,
            'method' => 'put'
        ];
    }

    public function patch($uri, $path)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $path,
            'method' => 'PATCH'
        ];
    }

    public function delete($uri, $path)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $path,
            'method' => 'DELETE'
        ];
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    function abort($code = Response::NOT_FOUND)
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }
};
