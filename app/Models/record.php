<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function factory()
    {
        return $this->belongsTo(factory::class);
    }

    public function activities()
    {
        return $this->hasMany(industry_activity::class);
    }

}
