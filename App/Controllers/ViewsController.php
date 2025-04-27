<?php

class ViewsController
{
    public static function app($path): string
    {
        return BASE_PATH . "App/{$path}";
    }

    public static function common($path): string
    {
        return BASE_PATH . "App/Common/{$path}";
    }

    public static function controllers($path, $attributes = [])
    {

        extract($attributes);

        return BASE_PATH . "App/Http/Controllers/{$path}";
    }

    public static function layouts($path, $attributes = [])
    {

        extract($attributes);

        return BASE_PATH . "App/Http/Layouts/{$path}";

    }
    public static function views($path, $attributes = [])
    {

        extract($attributes);

        return BASE_PATH . "App/Http/Views/{$path}";

    }

    public static function routers($path): string
    {
        return BASE_PATH . "App/Common/Routers/{$path}";
    }

    public static function routersEndpoint($path): string
    {
        return BASE_PATH . "router/{$path}";
    }

}