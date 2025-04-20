<?php

// namespace Application\Library\Filters;

function dd($value) {

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function sameUri($pagh) : bool {
    return $pagh;    
}

function authorized($condition, $status = Response::FORBIDDEN)
{
    if($condition)
    {
        abort($status);
    }
}
