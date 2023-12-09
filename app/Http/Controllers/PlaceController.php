<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view('explore', compact('places'));
    }

    public function detail($id){
        $detail = Place::find($id);
        $shuffledItems = Place::all()->shuffle();
        // $slug = Str::slug($detail->name);
        
        return view('placePage', compact('detail', 'shuffledItems'));
    }

    
}

