<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Buyer;

class Transaction extends Model
{
    //
    protected $fillable = [

        'quantity',
        'buyer_id',
        'product_id',
    ];

    public function buyers(){

        return $this->belongsTo(Buyer::class);
    }


    public function products(){

        return $this->belongsTo(Product::class);
    }
}
