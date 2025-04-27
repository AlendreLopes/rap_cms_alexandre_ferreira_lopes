<?php

class Database
{
    /**
     * Summary of databases
     * @return array{adms: array{charset: string, dns: string, db: array{charset: string, dns: string}, user: array{charset: string, dns: string}}}
     */
    public static function databases(): array
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

    /**
     * Summary of secrets
     * @return array{secrets: array{password: string, username: string}}
     */
    public static function secrets(): array
    {
        return [
            'secrets' => [
                'username' => 'root',
                'password' => 'password',
            ],

        ];
    }

    /**
     * Summary of services
     * @return array{aliases: array{@npm: string, components: array, services: array, vendorPath: string}}
     */
    public static function services(): array
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