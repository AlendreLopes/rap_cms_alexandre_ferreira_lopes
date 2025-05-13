<?php

namespace App\Http\Models\Forms;

use App\Common\Validations\Validation;
use App\Common\Validations\ValidationException;

class ProducsForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {

        if (!Validation::string($attributes['category_id'])) {
            $this->errors['category_id'] = 'Provide a category id.';
        }

        if (!Validation::string($attributes['brand_id'])) {
            $this->errors['brand_id'] = 'Provide a brand id.';
        }

        if (!Validation::string($attributes['collor_id'])) {
            $this->errors['collor_id'] = 'Provide a collor id.';
        }

        if (!Validation::string($attributes['size_id'])) {
            $this->errors['size_id'] = 'Provide a size id.';
        }

        if (!Validation::string($attributes['name'], 2 , 150)) {
            $this->errors['name'] = 'Provide a product name.';
        }

        if (!Validation::string($attributes['slug'], 2, 200)) {
            $this->errors['slug'] = 'Provide a product slug.';
        }

        if (!Validation::string($attributes['status'])) {
            $this->errors['status'] = 'Provide a status.';
        }

        if (!Validation::string($attributes['quantity'], 1, 150)) {
            $this->errors['quantity'] = 'Provide a quantity.';
        }

        if (!Validation::string($attributes['price'], 1, 150)) {
            $this->errors['price'] = 'Provide a price.';
        }

        if (!Validation::string($attributes['discount'], 1, 50)) {
            $this->errors['discount'] = 'Provide a discount.';
        }

        if (!Validation::string($attributes['description'], 50, 500)) {
            $this->errors['description'] = 'Provide a description.';
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