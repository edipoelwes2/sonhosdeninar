<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes;

    protected $filable = [
        'code',
        'user_id',
        'description',
    ];

    public function product_sales()
    {
        return $this->hasMany(ProductSale::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
