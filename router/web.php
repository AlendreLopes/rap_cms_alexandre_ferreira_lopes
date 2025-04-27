<?php

// Site Guest 
$router->get('/', 'Site/index.php');
$router->get('/contact', 'Site/contact.php');

// Products Guest
$router->get('/products', 'Products/index.php');

// Blogs
$router->get('/blog', 'Blog/index.php');
$router->store('/blog/create', 'Blog/create.php');
$router->patch('/blog/edit', 'Blog/edit.php');
$router->get('/blog/show', 'Blog/show.php');
$router->delete('/blog/destroy', 'Blog/destroy.php');

// Site Guest Users
$router->get('/login', 'Site/login.php');
$router->post('/login', 'Site/login.php');
$router->get('/register', 'Site/register.php');
$router->store('/register', 'Site/register.php');
$router->get('/forgot-password', 'Site/forgot_password.php');
$router->post('/forgot-password', 'Site/forgot_password.php');

// Site Guest Administrators
$router->get('/administrators/login', 'Admins/login.php');

// Users dashboard access after login
$router->get('/dashboard', 'Dashboard/Users/index.php');
$router->get('/dashboard/users/profile', 'Dashboard/Users/Profile/index.php');
$router->patch('/dashboard/users/profile', 'Dashboard/Users/Profile/edit.php');
$router->get('/dashboard/users/orders', 'Dashboard/Users/Products/Orders/index.php');
$router->get('/dashboard/users/payments', 'Dashboard/Users/Products/Payments/index.php');
$router->get('/dashboard/users/blog', 'Dashboard/Users/blog/index.php');

// Administrators dashboard access after login
$router->get('/administrators', 'Dashboard/Admins/index.php');
$router->get('/administrators/products', 'Dashboard/Admins/Products/index.php');
$router->get('/administrators/plog', 'Dashboard/Admins/Site/Blog/index.php');

// Administrators Users
$router->get('/administrators/users', 'Dashboard/Admins/Site/login.php');
$router->get('/administrators/users/register', 'Dashboard/Admins/Site/register.php');
$router->post('/administrators/users/register', 'Dashboard/Admins/Site/register.php');

