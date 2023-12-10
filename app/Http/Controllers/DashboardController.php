<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\PlaceCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $places = Place::all();
        return view('place.index', compact('places'));
        // return view('dashboard.index', [
        //     'places' => Place::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('place.create', [
            'categories' => PlaceCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'place_category_id' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        Place::create($validatedData);

        return redirect('place')->with('success', 'Place has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        return view('place.edit', [
            'place' => $place,
            'categories' => PlaceCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'place_category_id' => 'required',
            'address' => 'required',
            'description' => 'required', 
        ]);

        Place::where('id', $place->id)
            ->update($validatedData);

        return redirect()->route('place.index')->with('success', 'Place has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        $place->delete();
        return redirect()->route('place.index')->with('success', 'Place has been deleted.');
    }

    public function delete(Place $place){
        $place->delete();
        return redirect()->back()->with('success', 'place has been deleted');
    }
}
