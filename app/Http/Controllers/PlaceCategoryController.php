<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlaceCategory;
use App\Models\Place;

class PlaceCategoryController extends Controller
{
    public function index(){
        $categories = PlaceCategory::all();
        // dd($categories);
        return view('catpage',compact('categories'));
    }

    public function show($id)
    {
        $category = PlaceCategory::findOrFail($id);
        $places = Place::with('category')->where('place_category_id', $category->id)->get();
        $categories = PlaceCategory::all();
    
        return view('catpage', compact('category', 'places','categories'));
    
    }

}
