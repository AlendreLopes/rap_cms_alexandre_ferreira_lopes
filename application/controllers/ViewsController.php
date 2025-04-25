<?php

class ViewsController
{

    public static function common($path): string
    {
        return "application/common/{$path}";
    }

    public static function controllers($path, $attributes = [])
    {

        extract($attributes);

        return "application/http/controllers/{$path}";
    }

    public static function layouts($path, $attributes = [])
    {

        extract($attributes);

        return "application/http/layouts/{$path}";

    }
    public static function views($path, $attributes = [])
    {

        extract($attributes);

        return "application/http/views/{$path}";

    }

    public static function routers($path): string
    {
        return "application/common/routers/{$path}";
    }

    public static function routersEndpoint($path): string
    {
        return "router/{$path}";
    }

}