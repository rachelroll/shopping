<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{

    protected $fillable = [
        'amount',
        'rating',
        'review',
        'reviewed_at',
        'price',

    ];

    protected $dates = [
        'reviewed_at',

    ];
    
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }

    public function order()
    {
        return $this->belongsTo(User::class);
    }
}