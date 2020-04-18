<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    const TYPES = ['RN', 'P', 'M', 'G', 'XG', 'XXG', 'GRANDINHOS'];

    public static function all($columns = [])
    {
        return array_obj(self::TYPES);
    }

    public static function find($type)
    {
        return collect(self::all())
            ->first(fn ($value) => $value == $type);
    }
}