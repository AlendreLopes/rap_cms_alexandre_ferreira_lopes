<?php

namespace App\Middleware;

class Middlware
{
    public const MAP = [
        'adm' => Adm::class,
        'auth'  => Auth::class,
        'email' => Email::class,
        'guest' => Guest::class
    ];

    public static function resolver($key)
    {
        if (!$key) {

            return;

        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            
            throw new \Exception("No matching Middleware found for key: {$key}");

        }

        (new $middleware)->handle();
    }
}