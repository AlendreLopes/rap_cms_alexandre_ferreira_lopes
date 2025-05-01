<?php

use App\Container;

test('It can resolve something out of the container', function () {

    // arrange
    $container = new Container();

    // Whats name of my dog
    $container->bind('dog', fn() => 'bituka');

    // act
    $result = $container->resolve('dog');

    // assert/expect
    expect($result)->toBeTrue('sasha');

});
