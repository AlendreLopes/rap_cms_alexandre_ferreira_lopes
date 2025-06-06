<?php

namespace App\Http\Models\Forms;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class RegisterForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {

        if (!Validation::string($attributes['username'], 5, 50)) {
            $this->errors['username'] = 'Please provide username.';
        }

        if (!Validation::email($attributes['email'])) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validation::string($attributes['password'], 8, 150)) {
            $this->errors['password'] = 'Please provide a valid password.';
        }

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