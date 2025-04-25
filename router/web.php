<?php

return [
    // Site
    'site' => [
        // Site
        '/' => 'site/index.php',
        '/contact' => 'site/contact.php',
        // Products
        '/products' => 'products/index.php',
        // Blogs
        '/blog' => 'blog/index.php',
        '/blog/create' => 'blog/create.php',
        '/blog/show' => 'blog/show.php',
        // Users
        '/login' => 'site/login.php',
        '/register' => 'site/register.php',
        '/forgot-password' => 'site/forgot_password.php',
        // admins dashboard access after login
        '/administrators/login' => 'admins/login.php',
    ],
    // Users
    'Users' => [
        // user dashboard access after login
        '/dashboard' => 'dashboard/users/index.php',
        '/dashboard/profile' => 'dashboard/users/index.php',
        '/dashboard/users/orders' => 'dashboard/users/products/index.php',
        '/dashboard/users/recontrollers' => 'dashboard/users/blog/blog.php',
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
];
