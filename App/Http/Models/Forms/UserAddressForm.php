<?php

namespace App\Http\Models\Forms;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class UserAddressForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {

        if (!Validation::string($attributes['zip_code'])) {
            $this->errors['zip_code'] = 'Provide Zip Code.';
        }

        if (!Validation::string($attributes['address'])) {
            $this->errors['address'] = 'Provide a address.';
        }

        if (!Validation::string($attributes['address_number'])) {
            $this->errors['address_number'] = 'Provide a address number.';
        }

        if (!Validation::string($attributes['neighborhood'])) {
            $this->errors['neighborhood'] = 'Provide a neighborhood.';
        }

        if (!Validation::string($attributes['city'])) {
            $this->errors['city'] = 'Provide a city.';
        }

        if (!Validation::string($attributes['state'])) {
            $this->errors['state'] = 'Provide a state.';
        }

        if (!Validation::string($attributes['country'])) {
            $this->errors['country'] = 'Provide a country.';
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