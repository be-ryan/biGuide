<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Place;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('placePage', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request, $placeId)
    {
        $request->validate([
            'content' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        $review = new Review([
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        $user = auth()->user();

        // Set user_id by incrementing values (adjust as needed)
        // $review->user_id =  auth()->user()->id();
        
        $review->user()->associate($user);
        $review->place()->associate($placeId);

        $review->save();

        // Retrieve the reviews associated with the place
        // $reviews = Review::where('place_id', $placeId)->get();

        // Retrieve place details based on $placeId (adjust this based on your actual relationships)
        $id = Place::find($placeId);

        $shuffledItems = Place::all()->shuffle();

        // return view('placePage', compact('detail', 'reviews', 'shuffledItems'))->with('success', 'Review created successfully');
        return redirect()->route('detail', compact('id'))->with('success', 'Review created successfully');
    }


    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'content' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        $review->update([
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully');
    }


    public function show($placeId)
    {
        // Find the place by ID
        $place = Place::find($placeId);
    
        // Check if the place exists
        if (!$place) {
            abort(404);
        }
    
        // Retrieve details of the place
        $detail = [
            'name' => $place->name,
            'address' => $place->address,
            'description' => $place->description,
            // Add other details as needed
        ];
    
        // Retrieve reviews associated with the place
        $reviews = $place->reviews;
    
        // Pass the variables directly without using compact
        return view('reviews.show', ['detail' => $detail, 'reviews' => $reviews]);
    }
    
}
