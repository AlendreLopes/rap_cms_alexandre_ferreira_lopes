<?php

use App\Validations\Response;


/**
 * Functions to App
 */

/**
 * Summary of dd / Die and Dump
 * @param mixed $value
 * @return never
 * 
 */
function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/**
 * Summary of sameUri
 * 
 *  * Check wether SERVER URI is the same URI
 * 
 * @param mixed $pagh
 * @return bool
 */
function sameUri($pagh): bool
{
    return $pagh;
}

/**
 * Summary of authorize
 * 
 *  * Verify if the User is authorized to access
 * 
 * @param mixed $condition
 * @param mixed $status
 * @return void
 */
function authorize($condition, $status = Response::FORBIDDEN)
{

    if (!$condition) {
        abort($status);
    }

}

/**
 * Summary of abort
 * 
 *  *  Abort requisitions
 * 
 * @param mixed $errorCode
 * @return never
 */
function abort($errorCode): string
{

    http_response_code($errorCode);

    $views = "{$errorCode}.php";

    require httpControllers("Errors/{$errorCode}.php");

    exit();

}

/**
 * Summary of redirect
 * @param mixed $path
 * @return never
 */
function redirect($path)
{
    header("location: {$path}");

    exit();
}

/**
 * Summary of old
 * @param mixed $key
 * @param mixed $default
 * @return void
 */
function old($key, $default = '')
{
    return App\Sessions::get('old')[$key] ?? $default;
}
