<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    protected $filable = [
        'product_id',
        'transaction_id',
        'quantity'
    ];
}
