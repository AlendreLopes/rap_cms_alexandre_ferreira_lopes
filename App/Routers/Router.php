<?php

namespace App\Routers;

use App\Common\Validations\Response;
use App\Middleware\Middlware;

class Router
{
    protected $routes = [];

    public function action(string $uri, string $controller, string $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'POST');
    }

    public function patch(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'PATCH');
    }

    public function put(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'PUT');
    }

    public function delete(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'DELETE');
    }

    public function only($key)
    {
        $this->routes[(array_key_last($this->routes))]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                // Global var views used and all Layouts
                $views = $route['controller'];
                
                Middlware::resolver($route['middleware']);

                return require httpControllers($route['controller'], ['views' => $route['controller']]);

            }

        }

        abort(Response::NOT_FOUND);

    }

    public function route_list()
    {
        echo "Route list:<br>";
        echo "<pre>";
        foreach ($this->routes as $route) {
            $routeMiddleware = "{$route['middleware']}";
            $routeMetho = "{$route['method']}";
            $routeURI = "{$route['uri']}";
            $routeController = "{$route['controller']}<br>";
            // echo str_pad($routeMetho, 10, '.', STR_PAD_RIGHT) . str_pad($routeMiddleware, 10, '.', STR_PAD_RIGHT) . str_pad($routeURI, 50, '.', STR_PAD_RIGHT) . str_pad($routeController, 100, ".", STR_PAD_LEFT);
            echo str_pad($routeMetho, 10, '.', STR_PAD_RIGHT) . str_pad($routeURI, 50, '.', STR_PAD_RIGHT) . str_pad($routeController, 100, ".", STR_PAD_LEFT);
        }
        echo "<pre>";
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }
}
