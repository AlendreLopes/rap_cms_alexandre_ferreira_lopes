<?php

return [
    'endpoints' => [
        // Site
        'site' => [
            // Site
            '/' => 'site/home.php',
            '/contact' => 'site/contact.php',
            // Products
            '/products' => 'site/products/index.php',
            // Blogs
            '/blog' => 'site/blog/index.php',
            '/blog/create' => 'site/blog/create.php',
            '/blog/show' => 'site/blog/show.php',
            // Users
            '/login' => 'site/users/login.php',
            '/register' => 'site/users/register.php',
            '/login/forgot-password' => 'site/users/forgot_password.php',
            // admins dashboard access after login
            '/administrators/login' => 'admins/login.php',
        ],
        // Users
        'Users' => [
            // user dashboard access after login
            '/dashboard' => 'dashboard/users/index.php',
            '/dashboard/profile' => 'dashboard/users/index.php',
            '/dashboard/users/orders' => 'products/index.php',
            '/dashboard/users/recontrollers' => 'site/blog.php',
        ],
        // Administrators
        'admins' => [
            // admins dashboard access after login
            '/administrators' => 'dashboard/admins/index.php',
            '/administrators/products' => 'dashboard/admins/products/index.php',
            '/administrators/plog' => 'dashboard/admins/site/blog.php',
            // Users
            '/administrators/users' => 'dashboard/admins/site/login.php',
            '/administrators/users/register' => 'dashboard/admins/site/register.php',
        ],
    ],
];
