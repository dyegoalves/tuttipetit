<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
   
    public function ppds()
    {
        return $this->belongsToMany(Ppd::class);
    }
    
    
}
