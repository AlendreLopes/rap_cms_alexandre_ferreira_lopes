<?php

/**
 * Get Controllers and Show main Layouts and Views
 */

/**
 * Summary of app
 * @param mixed $path
 * @return string
 */
function app($path): string
{
    return "App/{$path}";
}

/**
 * Summary of common
 * @param mixed $path
 * @return string
 */
function appCommon($path): string
{
    return "App/Common/{$path}";
}

/**
 * Summary of controllers
 * 
 *  * Get Controllers
 * 
 * @param mixed $path
 * @param mixed $attributes
 * @return string
 */
function httpControllers($path, $attributes = [])
{

    extract($attributes);

    return "App/Http/Controllers/{$path}";
}

/**
 * Summary of layouts
 * 
 *  * Show main layouts of app
 * 
 * @param mixed $path
 * @param mixed $attributes
 * @return string
 */
function httpLayouts($path, $attributes = [])
{

    extract($attributes);

    return "App/Http/Layouts/{$path}";

}

/**
 * Summary of dashboard
 * 
 *  * Show Dashboard of app
 * 
 * @param mixed $path
 * @param mixed $attributes
 * @return string
 */
function httpDashboard($path, $attributes = [])
{

    extract($attributes);

    return "App/Http/{$path}";

}

/**
 * Summary of views
 * 
 *  * Show views
 * 
 * @param mixed $path
 * @param mixed $attributes
 * @return string
 */
function httpViews($path, $attributes = [])
{

    extract($attributes);

    return "App/Http/Views/{$path}";

}

/**
 * Summary of endpoint
 * 
 *  * Routes / Endpoints of App
 * 
 * @param mixed $path
 * @return string
 */
function routesEndpoint($path): string
{
    return "router/{$path}";
}
