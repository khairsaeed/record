<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function factories()
    {
        return $this->belongsToMany(factory::class, 'owner_factories');
    }
    
}
