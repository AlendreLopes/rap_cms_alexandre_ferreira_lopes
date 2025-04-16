<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /* 'cache' => [
            'class' => 'yii\caching\MemCache',
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
