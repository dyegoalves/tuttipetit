<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppd extends Model
{

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name'
    ];

    
    public function ports()
    {
        return $this->belongsToMany(Port::class);
    }
}
