<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Actor;
use App\Models\Opinion;

class Movie extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function actor()
    {
        return $this->hasMany(Actor::class);
    }

    public function opinion()
    {
        return $this->hasMany(Opinion::class);
    }
}
