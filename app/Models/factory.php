<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factory extends Model
{
    use HasFactory;


    protected $guarded =[];


    public function records()
    {
        return $this->hasMany(record::class);
    }

    public function owners()
    {
        return $this->belongsToMany(owner::class, 'owner_factories');
    }

    public function group()
    {
        return $this->belongsTo(group::class, 'groupId');
    }




}
