<?php

use App\Forms\LoginForm;
use App\Validations\AdmAuthenticator;

// Validate values login form
$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

// Attempt checker values
$signedIn = (new AdmAuthenticator)->attempt(
    $attributes['email'],
    $attributes['password']
);

if (!$signedIn) {

    $form->hasErrors('email', 'No matching account found for email or password')->throw();

}

// Happyend 
redirect('/administrator');

