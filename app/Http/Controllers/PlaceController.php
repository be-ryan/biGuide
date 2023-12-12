<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('explore', compact('places'));
    }

    public function detail($id){
        $detail = Place::find($id);
        $reviews = Review::where('place_id', $id)->get();
        return view('placePage', compact('detail','reviews'));
    }

    
}

