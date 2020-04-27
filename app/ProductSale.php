<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    protected $fillable = [
        'sale_id',
        'product_id',
        'amount',
        'sub_total'
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function sales()
    {
        return $this->belongsTo(Sale::class);
    }
}
