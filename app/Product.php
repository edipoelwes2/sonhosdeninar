<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'brand_id', 'description', 'size', 'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // public function setCategoryAttribute($value)
    // {
    //     $this->attributes['category_id'] = intval($value);
    // }

    // public function setBrandAttribute($value)
    // {
    //     $this->attributes['brand_id'] = intval($value);
    // }

    public function setPriceAttribute($value)
     {
         if(empty($value)){
            $this->attributes['price'] = null;
         } else {
            $this->attributes['price'] = floatval($this->convertStringToDouble($value));
         }
     }

     public function getPriceAttribute($value)
     {
         return number_format($value, 2, ',', '.');
     }

     private function convertStringToDouble(?string $param)
    {
        if(empty($param)){
            return null;
        }

        return str_replace(',', '.', str_replace('.', '', $param));
    }
}
