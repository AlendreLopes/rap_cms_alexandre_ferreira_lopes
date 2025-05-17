<?php

// Site Guest 
$router->get('/', 'Site/index.php');
$router->get('/contact', 'Site/contact.php');
// 
// Products Guest
$router->get('/products', 'Products/index.php');
$router->get('/products/details', 'Products/details.php');
// 
// Cart Guest
$router->get('/cart', 'Cart/index.php');
// Cart Add one
$router->post('/cart/add', 'Cart/Manage/create.php');
// Cart Checkout
$router->get('/cart/checkout', 'Cart/checkout.php')->only('auth');
// Cart Plus one
$router->put('/cart/plus-one', 'Cart/Manage/store.php');
// Cart Minus one
$router->patch('/cart/minus-one', 'Cart/Manage/update.php');
// Cart Remove
$router->patch('/cart/remove', 'Cart/Manage/remove.php');
// Cart Clear Cart
$router->delete('/cart/clear', 'Cart/Manage/destroy.php');
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
$router->get('/login', 'Site/login.php')->only('guest');
$router->put('/login/store', 'Site/Profile/signin.php')->only('guest');
// Site Users Forgot password
$router->get('/forgot-password', 'Site/Profile/forgot_password.php')->only('guest');
$router->patch('/forgot-password/recover', 'Site/Profile/recover.php');
// Site Users Register
$router->get('/register', 'Site/create.php')->only('guest');
$router->put('/register/create', 'Site/Profile/store.php')->only('guest');
// 
// 
// Users DASHBOARD ACCESS AFTER LOGIN
$router->get('/dashboard', 'Users/index.php')->only('auth');
// Users Profile
$router->get('/dashboard/user/profile', 'Users/show.php')->only('auth');
$router->get('/dashboard/user/edit', 'Users/edit.php')->only('auth');
$router->patch('/dashboard/user/update', 'Users/Profile/update.php')->only('auth');
$router->get('/dashboard/user/security', 'Users/security_account.php')->only('auth');
$router->patch('/dashboard/user/profile/security', 'Users/Profile/security_account.php')->only('auth');
$router->delete('/dashboard/user/delete', 'Users/Profile/destroy.php')->only('auth');
// Users Address
$router->get('/dashboard/user/address', 'Users/Address/index.php')->only('auth');
$router->get('/dashboard/user/address/create', 'Users/Address/create.php')->only('auth');
$router->put('/dashboard/user/address/store', 'Users/Address/Manage/address.store.php')->only('auth');
$router->get('/dashboard/user/address/edit', 'Users/Address/edit.php')->only('auth');
$router->patch('/dashboard/user/address/update', 'Users/Address/Manage/update.php')->only('auth');
$router->delete('/dashboard/user/address/delete', 'Users/Address/Manage/destroy.php')->only('auth');
// Logout
$router->post('/dashboard/logout', 'Site/Profile/logout.php')->only('auth');
// 
// Users Orders / Payments
$router->get('/dashboard/orders', 'Users/Orders/index.php')->only('auth');
$router->get('/dashboard/orders/details', 'Users/Orders/details.php')->only('auth');
$router->post('/dashboard/orders/create', 'Users/Orders/Manage/store.php')->only('auth');
// 
$router->get('/dashboard/payments', 'Users/Payments/index.php')->only('auth');
$router->get('/dashboard/payments/create', 'Users/Payments/create.php')->only('auth');
$router->get('/dashboard/payments/store', 'Users/Payments/Manage/store.php')->only('auth');
//
// 
// 
// Administrators Users Login
$router->get('/administrators/login', 'Admins/login.php')->only('guest');
$router->put('/administrators/login/store', 'Admins/Profile/signin.php');
// Administrators Users Forgot password
$router->get('/administrators/forgot-password', 'Admins/forgot_password.php')->only('guest');
$router->patch('/administrators/forgot-password/recover', 'Admins/Profile/recover.php');
// Administrators Users Register
$router->get('/administrators/register', 'Admins/create.php')->only('guest');
$router->put('/administrators/register/store', 'Admins/Profile/store.php');
// 
// 
// 
// Administrators  DASHBOARD ACCESS AFTER LOGIN
$router->get('/administrators', 'Admins/index.php')->only('adm');
$router->get('/administrators/admins', 'Admins/usersAdminstrators.php')->only('adm');
$router->get('/administrators/show', 'Admins/show.php')->only('adm');
$router->get('/administrators/edit', 'Admins/edit.php')->only('adm');
$router->patch('/administrators/update', 'Admins/Profile/update.php')->only('adm');
$router->get('/administrators/security', 'Admins/security.php')->only('adm');
$router->patch('/administrators/security', 'Admins/Profile/security.php')->only('adm');
$router->delete('/administrators/delete', 'Admins/Profile/destroy.php')->only('adm');
$router->post('/administrators/logout', 'Admins/Profile/logout.php')->only('adm');
// 
// Administrators Users
$router->get('/administrators/users', 'Admins/Users/index.php')->only('adm');
// Users Show 
$router->get('/administrators/users/show', 'Admins/Users/show.php')->only('adm');
// 
// Administrators Payments
$router->get('/administrators/payments', 'Admins/Payments/index.php')->only('adm');
// 
// Products with TABs that show options view default Products and option Images
// Administrators Products
$router->get('/administrators/products', 'Admins/Products/index.php')->only('adm');
// Products Show
$router->get('/administrators/products/show', 'Admins/Products/show.php')->only('adm');
// Products Create
$router->get('/administrators/products/create', 'Admins/Products/create.php')->only('adm');
$router->put('/administrators/products/store', 'Admins/Products/Manage/store.php')->only('adm');
// Products Edit
$router->get('/administrators/products/edit', 'Admins/Products/edit.php')->only('adm');
$router->patch('/administrators/products/update', 'Admins/Products/Manage/update.php')->only('adm');
// Products Delete
$router->delete('/administrators/products/delete', 'Admins/Products/Manage/destroy.php')->only('adm');
// 
// Products Images
$router->get('/administrators/products/images', 'Admins/Products/Images/index.php')->only('adm');
// Products Images Show
$router->get('/administrators/products/images/show', 'Admins/Products/Images/show.php')->only('adm');
// Products Images Create
$router->get('/administrators/products/images/create', 'Admins/Products/Images/create.php')->only('adm');
$router->put('/administrators/products/images/store', 'Admins/Products/Images/Manage/store.php')->only('adm');
// Products Images Edit
$router->get('/administrators/products/images/edit', 'Admins/Products/Images/edit.php')->only('adm');
$router->patch('/administrators/products/images/update', 'Admins/Products/Images/Manage/update.php')->only('adm');
// Products Images Delete
$router->delete('/administrators/products/images/delete', 'Admins/Products/Images/Manage/destroy.php')->only('adm');
// 
// Administrators Orders
$router->get('/administrators/orders', 'Admins/Orders/index.php')->only('adm');
// 
// Administrators Brands
$router->get('/administrators/brands', 'Admins/Brands/index.php')->only('adm');
// Brands Show
$router->get('/administrators/brands/show', 'Admins/Brands/show.php')->only('adm');
// Brands Create
$router->get('/administrators/brands/create', 'Admins/Brands/create.php')->only('adm');
$router->put('/administrators/brands/store', 'Admins/Brands/Manage/store.php')->only('adm');
// Brands Edit
$router->get('/administrators/brands/edit', 'Admins/Brands/edit.php')->only('adm');
$router->patch('/administrators/brands/update', 'Admins/Brands/Manage/update.php')->only('adm');
// 
$router->delete('/administrators/brands/delete', 'Admins/Brands/Manage/destroy.php')->only('adm');
// 
// Administrators Categories
$router->get('/administrators/categories', 'Admins/Categories/index.php')->only('adm');
// Categories Show
$router->get('/administrators/categories/show', 'Admins/Categories/show.php')->only('adm');
// Categories Create
$router->get('/administrators/categories/create', 'Admins/Categories/create.php')->only('adm');
$router->put('/administrators/categories/store', 'Admins/Categories/Manage/store.php')->only('adm');
// Categories Edit
$router->get('/administrators/categories/edit', 'Admins/Categories/edit.php')->only('adm');
$router->patch('/administrators/categories/update', 'Admins/Categories/Manage/update.php')->only('adm');
// 
$router->delete('/administrators/categories/delete', 'Admins/Categories/Manage/destroy.php')->only('adm');
// 
// Administrators Collors
$router->get('/administrators/collors', 'Admins/Collors/index.php')->only('adm');
// Collors Show
$router->get('/administrators/collors/show', 'Admins/Collors/show.php')->only('adm');
// Collors Create
$router->get('/administrators/collors/create', 'Admins/Collors/create.php')->only('adm');
$router->put('/administrators/collors/store', 'Admins/Collors/Manage/store.php')->only('adm');
// Collors Edit
$router->get('/administrators/collors/edit', 'Admins/Collors/edit.php')->only('adm');
$router->patch('/administrators/collors/update', 'Admins/Collors/Manage/update.php')->only('adm');
// 
$router->delete('/administrators/collors/delete', 'Admins/Collors//Manage/destroy.php')->only('adm');
// 
// Administrators Sizes
$router->get('/administrators/sizes', 'Admins/Sizes/index.php')->only('adm');
// Sizes Show
$router->get('/administrators/sizes/show', 'Admins/Sizes/show.php')->only('adm');
// Sizes Create
$router->get('/administrators/sizes/create', 'Admins/Sizes/create.php')->only('adm');
$router->put('/administrators/sizes/store', 'Admins/Sizes/Manage/store.php')->only('adm');
// Sizes Edit
$router->get('/administrators/sizes/edit', 'Admins/Sizes/edit.php')->only('adm');
$router->patch('/administrators/sizes/update', 'Admins/Sizes/Manage/update.php')->only('adm');
// 
$router->delete('/administrators/sizes/delete', 'Admins/Sizes//Manage/destroy.php')->only('adm');
