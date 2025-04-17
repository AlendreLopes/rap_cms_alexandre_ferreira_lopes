<?php

namespace Application;

return [
    'endpoints' => [
        // Site
        'site' => [
            '/' => 'application/views/site/home',
            '/products' => 'application/views/products/index',
            '/blog' => 'application/views/site/blog',
            '/contact' => 'application/views/site/contact',
            // users
            '/login' => 'application/views/site/login',
            '/register' => 'application/views/site/register',
            '/forgot-password' => 'application/views/site/forgot_password',
            // admins dashboard access after login
            '/administrators/login' => 'application/views/dashboard/admins/index',
        ],
        // Users
        'users' => [
            // user dashboard access after login
            '/dashboard' => 'application/views/dashboard/users/index',
            '/dashboard/profile' => 'application/views/dashboard/users/index',
            '/dashboard/users/orders' => 'application/views/products/index',
            '/dashboard/users/reviews' => 'application/views/site/blog',
        ],
        // Administrators
        'admins' => [
            // admins dashboard access after login
            '/administrators' => 'application/views/dashboard/admins/index',
            '/administrators/products' => 'application/views/products/index',
            '/administrators/blog' => 'application/views/site/blog',
            // users
            '/administrators/users' => 'application/views/site/login',
            '/administrators/users/register' => 'application/views/site/register',
        ],
    ],
];
