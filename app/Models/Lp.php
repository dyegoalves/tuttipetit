<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lp extends Model
{
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'price'
    ];
    
}
