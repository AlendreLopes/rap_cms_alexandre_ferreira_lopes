<?php

use App\Validations\UserAuthenticator;

// Log the user out

(new UserAuthenticator)->logout();

header('location: /');

exit();