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
$router->get('/blog/create', 'Blog/create.php');
$router->store('/blog/store', 'Blog/store.php');
// Blogs Post Show
$router->get('/blog/show', 'Blog/show.php');
// Blogs Post Edit
$router->get('/blog/edit', 'Blog/edit.php');
$router->put('/blog/update', 'Blog/update.php');
// Blogs Post Delete
$router->delete('/blog/delete', 'Blog/delete.php');
// 
// Site Users Login
$router->get('/login', 'Site/login.php');
$router->post('/signin', 'Site/signin.php');
// Site Users Register
$router->get('/register', 'Site/register.php');
$router->store('/store', 'Site/store.php');
// Site Users Forgot password
$router->get('/forgot-password', 'Site/forgot_password.php');
$router->post('/recover', 'Site/recover.php');
// 
// Users DASHBOARD ACCESS AFTER LOGIN
$router->get('/dashboard', 'Dashboard/Users/index.php');
// Users Profile
$router->get('/dashboard/users/profile', 'Dashboard/Users/Profile/index.php');
$router->get('/dashboard/users/edit', 'Dashboard/Users/Profile/edit.php');
$router->put('/dashboard/users/update', 'Dashboard/Users/Profile/update.php');
$router->delete('/dashboard/users/delete', 'Dashboard/Users/Profile/delete.php');
// Users Payments / Products / Orders
$router->get('/dashboard/users/payments', 'Dashboard/Users/Products/payments.php');
$router->get('/dashboard/users/products', 'Dashboard/Users/Products/index.php');
$router->get('/dashboard/users/orders', 'Dashboard/Users/Products/orders.php');
// 
// Site Administrators Login
$router->get('/administrators/login', 'Admins/login.php');
// 
// Administrators  DASHBOARD ACCESS AFTER LOGIN
$router->get('/administrators', 'Dashboard/Admins/index.php');
$router->get('/administrators/products', 'Dashboard/Admins/Products/index.php');
// Products Show - Products with TABs that show options view default Products and option Images
$router->get('/administrators/products/show', 'Dashboard/Admins/Products/show.php');
// Products Create
$router->get('/administrators/products/create', 'Dashboard/Admins/Products/create.php');
$router->store('/administrators/products/store', 'Dashboard/Admins/Products/store.php');
// Products Edit
$router->get('/administrators/products/edit', 'Dashboard/Admins/Products/edit.php');
$router->put('/administrators/products/update', 'Dashboard/Admins/Products/update.php');
// Products Images
$router->get('/administrators/products/images', 'Dashboard/Admins/Products/Images/index.php');
// Products Images Show
$router->get('/administrators/products/images/show', 'Dashboard/Admins/Products/Images/show.php');
// Products Images Create
$router->get('/administrators/products/images/create', 'Dashboard/Admins/Products/Images/create.php');
$router->store('/administrators/products/images/store', 'Dashboard/Admins/Products/Images/store.php');
// Products Images Edit
$router->get('/administrators/products/images/edit', 'Dashboard/Admins/Products/Images/edit.php');
$router->put('/administrators/products/images/update', 'Dashboard/Admins/Products/Images/update.php');
// 
// Blog Show - Products with TABs that show options view default Products and option Images
$router->get('/administrators/blog/show', 'Dashboard/Admins/Blog/show.php');
// Blog Create
$router->get('/administrators/blog/create', 'Dashboard/Admins/Blog/create.php');
$router->store('/administrators/blog/store', 'Dashboard/Admins/Blog/store.php');
// Blog Edit
$router->get('/administrators/blog/edit', 'Dashboard/Admins/Blog/edit.php');
$router->put('/administrators/blog/update', 'Dashboard/Admins/Blog/update.php');
// Blog Images
$router->get('/administrators/blog/images/images', 'Dashboard/Admins/Blog/Images/index.php');
// Blog Images Show
$router->get('/administrators/blog/images/show', 'Dashboard/Admins/Blog/Images/show.php');
// Blog Images Create
$router->get('/administrators/blog/images/create', 'Dashboard/Admins/Blog/Images/create.php');
$router->store('/administrators/blog/images/store', 'Dashboard/Admins/Blog/Images/store.php');
// Blog Images Edit
$router->get('/administrators/blog/images/edit', 'Dashboard/Admins/Blog/Images/edit.php');
$router->put('/administrators/blog/images/update', 'Dashboard/Admins/Blog/Images/update.php');
// 
// Administrators Users
$router->get('/administrators/users', 'Dashboard/Admins/Site/login.php');
$router->get('/administrators/users/register', 'Dashboard/Admins/Site/register.php');
$router->post('/administrators/users/register', 'Dashboard/Admins/Site/register.php');

