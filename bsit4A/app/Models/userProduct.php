<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userProduct extends Model
{
    use HasFactory;
    protected $table = 'useritems';
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_quantity',
        'product_status'
    ];
}
