<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'total_price',
        'agent_id',
    ];

    protected $table = 'transaction';
}
