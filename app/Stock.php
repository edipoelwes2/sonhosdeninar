<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Stock extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['product_id', 'quantity', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = money_db($value);
    }

}
