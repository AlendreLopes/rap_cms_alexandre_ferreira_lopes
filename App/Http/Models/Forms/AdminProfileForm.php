<?php

namespace App\Http\Models\Forms;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class AdminProfileForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {

        if (!Validation::string($attributes['username'])) {
            $this->errors['username'] = 'Provide a username.';
        }

        if (!Validation::string($attributes['email'])) {
            $this->errors['email'] = 'Provide a válid email.';
        }

        if (!Validation::string($attributes['phone'])) {
            $this->errors['phone'] = 'Provide a phone.';
        }

    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);
        // dd($instance);
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