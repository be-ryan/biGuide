<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('explore', compact('places'));
    }
}

