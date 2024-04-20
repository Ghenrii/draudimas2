<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['reg_number', 'brand', 'model', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }
}

