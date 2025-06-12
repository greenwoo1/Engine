<?php

class Router
{
    private static array $routes = [];

    public static function set(HttpMethod $method, string $url, array $controllerAction)
    {
        self::$routes[$url][$method->value] = $controllerAction;
    }

    public static function get(string $url, array $controllerAction)
    {
        self::set(HttpMethod::GET, $url, $controllerAction);
    }

    public static function post(string $url, array $controllerAction)
    {
        self::set(HttpMethod::POST, $url, $controllerAction);
    }

    public static function process()
    {

    }
}