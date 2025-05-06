<?php

// Site Guest 
$router->get('/', 'Site/index.php');
$router->get('/contact', 'Site/contact.php');
// 
// Products Guest
$router->get('/products', 'Products/index.php');
// 
// Blogs
$router->get('/blog', 'Blog/index.php');
// Blogs Post Create
$router->get('/blog/create', 'Blog/create.php')->only('auth');
$router->post('/blog/store', 'Blog/store.php')->only('auth');
// Blogs Post Show
$router->get('/blog/show', 'Blog/show.php');
// Blogs Post Edit
$router->get('/blog/edit', 'Blog/edit.php')->only('auth');
$router->patch('/blog/update', 'Blog/update.php')->only('auth');
// Blogs Post Delete
$router->delete('/blog/delete', 'Blog/destroy.php')->only('auth');
// 
// 
// 
// Site Users Login
$router->get('/login', 'Users/login.php')->only('guest');
$router->post('/login/store', 'Users/Profile/signin.php');
// Site Users Forgot password
$router->get('/forgot-password', 'Users/Profile/forgot_password.php')->only('guest');
$router->patch('/forgot-password/recover', 'Users/Profile/recover.php');
// Site Users Register
$router->get('/register', 'Users/create.php')->only('guest');
$router->post('/register/create', 'Users/Profile/store.php')->only('guest');
// 
// 
// 
// Users DASHBOARD ACCESS AFTER LOGIN
$router->get('/dashboard', 'Users/index.php')->only('auth');
// 
// Users Profile
$router->get('/dashboard/users/show', 'Users/show.php')->only('auth');
$router->get('/dashboard/users/edit', 'Users/edit.php')->only('auth');
$router->patch('/dashboard/users/update', 'Users/Profile/update.php')->only('auth');
$router->delete('/dashboard/users/delete', 'Users/Profile/destroy.php')->only('auth');
$router->post('/dashboard/users/logout', 'Users/Profile/logout.php')->only('auth');
// 
// Users Payments / Products / Orders
$router->get('/dashboard/users/payments', 'Users/Products/payments.php')->only('auth');
$router->get('/dashboard/users/products', 'Users/Products/index.php')->only('auth');
$router->get('/dashboard/users/orders', 'Users/Products/orders.php')->only('auth');
//
// 
// 
// Administrators Users Login
$router->get('/administrators/login', 'Admins/login.php')->only('guest');
$router->post('/administrators/store', 'Admins/signin.php');
// Administrators Users Forgot password
$router->get('/administrators/forgot-password', 'Admins/forgot_password.php')->only('guest');
$router->patch('/administrators/forgot-password/recover', 'Admins/Profile/recover.php');
// Administrators Users Register
$router->get('/administrators/register', 'Admins/create.php')->only('guest');
$router->post('/administrators/register/store', 'Admins/store.php');
// 
// 
// 
// Administrators  DASHBOARD ACCESS AFTER LOGIN
$router->get('/administrators', 'Admins/index.php')->only('adm');
$router->get('/administrators/products', 'Admins/Products/index.php')->only('adm');
// Products Show - Products with TABs that show options view default Products and option Images
$router->get('/administrators/products/show', 'Admins/Products/show.php')->only('adm');
// Products Create
$router->get('/administrators/products/create', 'Admins/Products/create.php')->only('adm');
$router->put('/administrators/products/store', 'Admins/Products/store.php')->only('adm');
// Products Edit
$router->get('/administrators/products/edit', 'Admins/Products/edit.php')->only('adm');
$router->patch('/administrators/products/update', 'Admins/Products/update.php')->only('adm');
// Products Images
$router->get('/administrators/products/images', 'Admins/Products/Images/index.php')->only('adm');
// Products Images Show
$router->get('/administrators/products/images/show', 'Admins/Products/Images/show.php')->only('adm');
// Products Images Create
$router->get('/administrators/products/images/create', 'Admins/Products/Images/create.php')->only('adm');
$router->put('/administrators/products/images/store', 'Admins/Products/Images/store.php')->only('adm');
// Products Images Edit
$router->get('/administrators/products/images/edit', 'Admins/Products/Images/edit.php')->only('adm');
$router->patch('/administrators/products/images/update', 'Admins/Products/Images/update.php')->only('adm');
