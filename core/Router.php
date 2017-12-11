<?php

class Router
{
    private $routes;

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public static function load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined defined');
    }
}