<?php

namespace App\Common\Validations;

use App\Common\Validations\Enums\EnumStatus;

class Validation
{

    public static function string($value, $min = 1, $max = INF) {

        $value = mb_trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function status($value)
    {
        $value = mb_trim($value);

        $status = [EnumStatus::Draft, EnumStatus::Published];

        return array_key_exists($value, $status);
    }

    public static function email(string $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function greaterThan(int $value, int $greaterThan): bool
    {
        return $value > $greaterThan;
    }

}