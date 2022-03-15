<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activityProduct extends Model
{
    use HasFactory;

    protected $guarded =[];


    public function industry_activity()
    {
        return $this->belongsTo(industry_activity::class);
    }
    public function materials()
    {
        return $this->hasMany(material::class);
    }
    

}
