<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceCategory extends Model
{
    protected $table = 'place_categories';
    protected $fillable = ['name'];

    public function places(){
        return $this->hasMany(Place::class);
    }

}
