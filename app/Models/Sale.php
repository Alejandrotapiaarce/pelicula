<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Game;
use App\Models\Movie;
use App\Models\Product;
use App\Models\Shipping;

class Sale extends Model
{
    use HasFactory;


    public function serie()
    {
        return $this->belongsToMany(Serie::class);
    }


    public function game()
    {
        return $this->belongsToMany(Game::class);
    }


    public function movie()
    {
        return $this->belongsToMany(Movie::class);
    }


    public function product()
    {
        return $this->belongsToMany(Product::class);
    }


    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
}
