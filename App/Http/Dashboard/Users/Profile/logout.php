<?php

use App\Sessions;


Sessions::destroy();

header('location: /');