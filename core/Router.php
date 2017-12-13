<?php

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file)
    {
        $router = new self;

        require $file;

        return $router;
    }

    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }

        throw new Exception('No route defined defined');
    }

    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if(!method_exists($controller, $action)) {
            throw new Exception("Action {$action} not exists in the controller {$controller}");
        }

        return $controller->$action();
    }
}