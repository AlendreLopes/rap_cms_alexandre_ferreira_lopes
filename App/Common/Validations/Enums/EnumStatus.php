<?php

namespace App\Common\Validations\Enums;

class EnumStatus
{
    const Draft = 'Draft';

    const Published = 'Published';

    public static function labels() : array
    {
        return [
            self::Draft => 'Draft',
            self::Published => 'Publiched',
        ];
    }
}