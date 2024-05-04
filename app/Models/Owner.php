<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name', 'surname', 'phone', 'email', 'address', 'user_id'];

    public function cars()
    {
        return $this->hasMany(Car::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}
