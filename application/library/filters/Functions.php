<?php

// namespace Application\Library\Filters;

function dd($value) {

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function whatURI($getURI){
    $filterURI = parse_url($_SERVER['REQUEST_URI'])['path'];
}