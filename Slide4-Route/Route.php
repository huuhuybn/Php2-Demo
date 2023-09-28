<?php

class Route
{
    public array $routes;
    public function __construct()
    {
        $this->routes = [];
    }
    public function addRoute($name,$handler){
        $this->routes[$name] = $handler;
    }
    public function getHandler($url) {
        return $this->routes[$url];
    }


}