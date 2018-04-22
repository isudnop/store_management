<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'barcode',
        'meta',
        'remark',
        'category_id',
        'department_id'
    ];

    protected $table = 'product';
}
