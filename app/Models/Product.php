<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'category',
    //     'productName',
    //     'price',
    //     'quantity'
    // ];

    protected $guarded = [];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
