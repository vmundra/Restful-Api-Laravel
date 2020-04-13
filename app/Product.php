<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Seller;
use App\Transaction;

class Product extends Model
{
    
    //status can take only two values these are those:-
    const UNAVAILABLE_PRODUCT = 'unavailable';
    const AVAILABLE_PRODUCT = 'available';

    protected $fillable= [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',

    ];


    public function isAvailable()
    {
        return $this->status == Product::AVAILABLE_PRODUCT;
    }


    public function categories(){

        return $this->belongsToMany(Category::class); //Product belongs to many categories
    }


    public function sellers(){

        return $this->belongsTo(Seller::class);
    }

    public function trnsactions(){

        return $this->hasMany(Transaction::class);
    }
}

