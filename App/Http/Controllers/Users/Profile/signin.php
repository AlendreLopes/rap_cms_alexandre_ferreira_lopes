<?php

use App\Http\Controllers\SiteController;
use App\Http\Models\LoginForm;

// Validate values login form
$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

// Attempt checker values
$login = (new SiteController)->login($attributes['email'], $attributes['password']);

if (!$login) {

    $form->hasErrors('email', 'No matching account found for email or password')->throw();

}

// Happyend 
redirect('/');
