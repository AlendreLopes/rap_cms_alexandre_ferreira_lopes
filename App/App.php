<?php

namespace App;

class App
{
    protected static $container;

    public static function setContainer($application) {
        
        static::$container = $application; 

    }

    public static function container() {
        
        return static::$container;

    }

    public static function bind($key, $resolver) {

        static::container()->bind($key, $resolver);
    }

    public static function resolve($key) {

        return static::container()->resolve($key);

    }

}