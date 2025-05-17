<?php

namespace App\Http\Models\Forms;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class OrdersForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        
        if (!Validation::string($attributes['user_id'])) {
            $this->errors['user_id'] = 'Provide a User.';
        }

        if (!Validation::string($attributes['user_address_id'])) {
            $this->errors['user_address_id'] = 'Provide a address.';
        }

        if (!Validation::string($attributes['cart_products_total'])) {
            $this->errors['cart_products_total'] = 'Provide a total products in cart.';
        }

        if (!Validation::string($attributes['cart_products_amount'])) {
            $this->errors['cart_products_amount'] = 'Provide a total amount.';
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