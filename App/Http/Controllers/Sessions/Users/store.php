<?php

use App\Forms\LoginForm;
use App\Validations\UserAuthenticator;

// Validate values login form
$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

// Attempt checker values
$signedIn = (new UserAuthenticator)->attempt(
    $attributes['email'], $attributes['password']
);

if (!$signedIn) {

    $form->hasErrors('errors', 'Invalid email or password')->throw();
    
}

// Happyend 
redirect('/dashboard');

