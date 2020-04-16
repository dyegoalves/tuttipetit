<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lo extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'price'
    ];
}
