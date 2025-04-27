<?php

namespace Application\Library\Filters\Enums;

class EnumStatus
{
    const Draft = 'draft';

    const Published = 'published';

    public static function labels() : array
    {
        return [
            self::Draft => 'Draft',
            self::Published => 'Publiched',
        ];
    }
}