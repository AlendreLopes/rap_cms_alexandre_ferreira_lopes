<?php

namespace App\Validations;

class ValidationException extends \Exception
{
    public readonly array $errors;

    public readonly array $oldData;

    public static function throw($errors, $oldData)
    {
        
        $instance = new static('The form failed to validate.');

        $instance->errors = $errors;

        $instance->oldData = $oldData;

        throw $instance;
        
    }
}