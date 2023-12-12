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

    // Place.php model
        public function reviews()
        {
            return $this->hasMany(Review::class);
        }

}

