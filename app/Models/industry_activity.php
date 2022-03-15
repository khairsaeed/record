<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class industry_activity extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function record()
    {
        return $this->belongsTo(record::class);
    }

    public function activityProducts()
    {
        return $this->hasMany(activityProduct::class);
    }

    public function Products()
    {
        return $this->hasMany(Product::class);
    }


}
