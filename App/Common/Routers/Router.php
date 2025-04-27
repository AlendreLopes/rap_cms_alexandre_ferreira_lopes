<?php

class Router
{
    protected $router = [];

    public function action(string $uri, string $controller, string $method)
    {
        $this->router[] = compact('uri', 'controller', 'method');
        return $this;
    }

    public function get(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'GET');
    }

    public function post(string $uri, string $controller)
    {
        return $this->action( $uri, $controller, 'POST');
    }

    public function patch(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'PATCH');
    }

    public function put(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'PUT');
    }

    public function store(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'STORE');
    }
    public function delete(string $uri, string $controller)
    {
        return $this->action($uri, $controller, 'DELETE');
    }


    public function route($uri, $method)
    {
        foreach ($this->router as $route) {

            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                $views = $route['controller'];
                // dd($views);
                // dd($route['uri']);
                // dd($route['controller']);
                // return require ViewsController::controllers($views, ['views' => $views]);
                return require ViewsController::controllers($route['controller'], ['views' => $route['controller']]);
            }

        }

        // $this->abort(Response::NOT_FOUND);
        abort(Response::NOT_FOUND);
    }

    public function route_list()
    {
        echo "Route list:<br>";
        echo "<pre>";
        foreach ($this->router as $route) {
            $routeMethod = "{$route['method']}";
            $routeURI = "{$route['uri']}";
            $routeController = "{$route['controller']}<br>";
            echo str_pad($routeMethod, 10, '.', STR_PAD_RIGHT) . str_pad($routeURI, 80, '.', STR_PAD_RIGHT) . str_pad($routeController, 40, ".", STR_PAD_LEFT);
        }
        echo "<pre>";
    }

}