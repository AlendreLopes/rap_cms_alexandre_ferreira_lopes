<?php
return [
    //------------------------//
    // DATABASES
    //------------------------//
    'databases' => [
        'db' => [
            'dns' => 'mysql:host=mysql_5;dbname=rap_cms',
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
    ],
    // User and Password
    'secrets' => [
        'username' => 'root',
        'password' => 'password',
    ],
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
