<?php

class Config
{

    public static function databases($type): array
    {
        return [
            'db' => [
                'dns' => 'mysql:host=172.18.0.2;dbname=rap_cms',
                'charset' => 'utf8',
            ],
            'adms' => [
                'dns' => 'mysql:host=mysql_5;dbname=rap_cms_admins',
                'charset' => 'utf8',
            ],
            'user' => [
                'dns' => 'mysql:host=mysql_5;dbname=rap_cms_users',
                'charset' => 'utf8',
            ],
        ];
    }

    public static function secrets($type): array
    {
        return [
            'secrets' => [
                'username' => 'root',
                'password' => 'password',
            ],

        ];
    }

    public static function services($type): array
    {
        return [
            // Sevices
            'services' => [
                'prerender' => [
                    'token' => '',
                    'secret' => '',
                ],
            ],
            'aliases' => [
                '@npm' => '@vendor/npm-asset',
            ],
            'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
            'components' => [
                'cache' => [
                    'class' => '',
                ],
                /* 'cache' => [
                    'class' => '',
                    'useMemcached' => false, // <--- here
                    'servers' => [
                        [
                            'host' => 'localhost',
                            'port' => 11211,
                            'weight' => 60,
                        ],
                    ],
                ], */
            ],
        ];
    }
}