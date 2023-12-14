<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    protected $fillable = [
        'place_category_id',
        'name',
        'address',
        'description',
        'img'
    ];

    public function placeCategory(){
        return $this->belongsTo(PlaceCategory::class, 'place_category_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function AvgRating(){
        $avgRating = $this->reviews->isEmpty() ? 0 : $this->reviews->avg('rating');
        return $avgRating;
    }
}

