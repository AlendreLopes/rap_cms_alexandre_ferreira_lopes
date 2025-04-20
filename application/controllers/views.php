<?php

class Views
{
    private static function base_path($path): string
    {
        return BASE_PATH . $path;
    }

    public static function controllers($path): string
    {
        return 'application/controllers/' . $path;
    }

    public static function library($path): string
    {
        return 'application/library/' . $path;
    }

    public static function common($path): string
    {
        return 'application/common/' . $path;
    }

    public static function views($path, $attributes = []) : string
    {

        extract($attributes);
        
        return 'application/views/' . $path;
    }

    public static function layouts($path, $attributes = []): string
    {

        extract($attributes);
        
        return 'application/views/layouts/' . $path;
    }
    public static function routers($path): string
    {
        return 'application/common/config/routers/' . $path;
    }


}