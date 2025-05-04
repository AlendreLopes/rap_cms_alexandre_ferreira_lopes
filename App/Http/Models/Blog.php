<?php

namespace App\Http\Models;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class Blog
{
    protected $errors = [];

    public function __construct(public array $attributes) {
        
        if (!Validation::string($attributes['title'], 5, 50)) {
            $this->errors['title'] = 'Title min 5 and max 50 chars.';
        }

        if (!Validation::string($attributes['description'], 50, 1500)) {
            $this->errors['description'] = 'Description min 50 and max 1000 chars.';
        }

    }

    public function notEqual($id, $user)
    {
        if ($id === $user) {
            return true;
        }

        return false;
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function hasErrors($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }
}