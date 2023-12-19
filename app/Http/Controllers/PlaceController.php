<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
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
        
        $reviews = Review::where('place_id', $id)->get();
        $avgRating = $detail->avgRating();

        return view('placePage', compact('detail','shuffledItems','reviews', 'avgRating'));
    }

    // public function getAvgRating($reviews){
    //     $avgRating = $reviews->isEmpty() ? 0 : $reviews->avg('rating');
    //     return $avgRating;
    // }

    public function search(Request $request)
    {
    $query = $request->input('query');

    $results = Place::where('name', 'like', '%' . $query . '%')
                    ->orWhere('address', 'like', '%' . $query . '%')
                    ->get();

    return view('search_results', compact('results', 'query'));
    }
}

