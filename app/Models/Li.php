<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Li extends Model
{
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'price'
    ];

}
