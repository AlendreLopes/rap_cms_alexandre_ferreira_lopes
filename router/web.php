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
$router->put('/blog/store', 'Blog/store.php')->only('auth');
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
$router->get('/login', 'Sessions/Users/login.php')->only('guest');
$router->post('/login/store', 'Sessions/Users/store.php');
// Site Users Forgot password
$router->get('/forgot-password', 'Sessions/Users/forgot_password.php')->only('guest');
$router->patch('/forgot-password/recover', 'Sessions/Users/update.php');
// Site Users Register
$router->get('/register', 'Registration/Users/register.php')->only('guest');
$router->post('/register/create', 'Registration/Users/create.php');
// 
// 
// 
// Users DASHBOARD ACCESS AFTER LOGIN
$router->get('/dashboard', 'Dashboard/Users/index.php')->only('auth');
// 
// Users Profile
$router->get('/dashboard/users/profile', 'Dashboard/Users/Profile/index.php')->only('auth');
$router->get('/dashboard/users/edit', 'Dashboard/Users/Profile/edit.php')->only('auth');
$router->patch('/dashboard/users/update', 'Dashboard/Users/Profile/update.php')->only('auth');
$router->delete('/dashboard/users/delete', 'Dashboard/Users/Profile/destroy.php')->only('auth');
$router->post('/dashboard/users/logout', 'Dashboard/Users/Profile/logout.php')->only('auth');
// 
// Users Payments / Products / Orders
$router->get('/dashboard/users/payments', 'Dashboard/Users/Products/payments.php')->only('auth');
$router->get('/dashboard/users/products', 'Dashboard/Users/Products/index.php')->only('auth');
$router->get('/dashboard/users/orders', 'Dashboard/Users/Products/orders.php')->only('auth');
//
// 
// 
// Administrators Login Users
$router->get('/admins/login', 'Sessions/Admins/login.php')->only('guest');
$router->post('/admin/store', 'Sessions/Admins/store.php');
// Administrators Users Forgot password
$router->get('/admins/forgot-password', 'Sessions/Admins/forgot_password.php')->only('guest');
$router->patch('/admins/forgot-password/recover', 'Sessions/Admins/update.php');
// Administrators Users Register
$router->get('/admins/register', 'Registration/Admins/register.php')->only('guest');
$router->post('/admins/register/store', 'Registration/Admins/store.php');
// 
// 
// 
// Administrators  DASHBOARD ACCESS AFTER LOGIN
$router->get('/administrators', 'Dashboard/Admins/index.php')->only('auth');
$router->get('/administrators/products', 'Dashboard/Admins/Products/index.php')->only('auth');
// Products Show - Products with TABs that show options view default Products and option Images
$router->get('/administrators/products/show', 'Dashboard/Admins/Products/show.php')->only('auth');
// Products Create
$router->get('/administrators/products/create', 'Dashboard/Admins/Products/create.php')->only('auth');
$router->put('/administrators/products/store', 'Dashboard/Admins/Products/store.php')->only('auth');
// Products Edit
$router->get('/administrators/products/edit', 'Dashboard/Admins/Products/edit.php')->only('auth');
$router->patch('/administrators/products/update', 'Dashboard/Admins/Products/update.php')->only('auth');
// Products Images
$router->get('/administrators/products/images', 'Dashboard/Admins/Products/Images/index.php')->only('auth');
// Products Images Show
$router->get('/administrators/products/images/show', 'Dashboard/Admins/Products/Images/show.php')->only('auth');
// Products Images Create
$router->get('/administrators/products/images/create', 'Dashboard/Admins/Products/Images/create.php')->only('auth');
$router->put('/administrators/products/images/store', 'Dashboard/Admins/Products/Images/store.php')->only('auth');
// Products Images Edit
$router->get('/administrators/products/images/edit', 'Dashboard/Admins/Products/Images/edit.php')->only('auth');
$router->patch('/administrators/products/images/update', 'Dashboard/Admins/Products/Images/update.php')->only('auth');
// 
// Blog
// Blog Show - Products with TABs that show options view default Products and option Images
$router->get('/administrators/blog/show', 'Dashboard/Admins/Blog/show.php')->only('auth');
// Blog Create
$router->get('/administrators/blog/create', 'Dashboard/Admins/Blog/create.php')->only('auth');
$router->put('/administrators/blog/store', 'Dashboard/Admins/Blog/store.php')->only('auth');
// Blog Edit
$router->get('/administrators/blog/edit', 'Dashboard/Admins/Blog/edit.php')->only('auth');
$router->patch('/administrators/blog/update', 'Dashboard/Admins/Blog/update.php')->only('auth');
// Blog Images
$router->get('/administrators/blog/images/images', 'Dashboard/Admins/Blog/Images/index.php')->only('auth');
// Blog Images Show
$router->get('/administrators/blog/images/show', 'Dashboard/Admins/Blog/Images/show.php')->only('auth');
// Blog Images Create
$router->get('/administrators/blog/images/create', 'Dashboard/Admins/Blog/Images/create.php')->only('auth');
$router->put('/administrators/blog/images/store', 'Dashboard/Admins/Blog/Images/store.php')->only('auth');
// Blog Images Edit
$router->get('/administrators/blog/images/edit', 'Dashboard/Admins/Blog/Images/edit.php')->only('auth');
$router->patch('/administrators/blog/images/update', 'Dashboard/Admins/Blog/Images/update.php')->only('auth');
