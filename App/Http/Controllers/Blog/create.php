<?php

use joshtronic\LoremIpsum;

// Call lipsum to fill form
$lipsum = new LoremIpsum();

$postTitle = $lipsum->words(5);

$bodyTitle = $lipsum->paragraphs(1);

// Form errors
$errors = [];

// Title
$title = 'Create Post';

// Blog Layouts
require httpLayouts('Blog/BlogLayout.php', [
    'errors' => $errors
]);