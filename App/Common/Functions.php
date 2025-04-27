<?php

function base_path($path): string
{
    return BASE_PATH . $path;
}


function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function sameUri($pagh): bool
{
    return $pagh;
}

function authorize($condition, $status = Response::FORBIDDEN)
{

    // dd($condition);
    if (!$condition) {
        abort($status);
    }

}
function abort($errorCode): string
{

    http_response_code($errorCode);

    require ViewsController::controllers("Errors/{$errorCode}.php");
    
    die();

}

