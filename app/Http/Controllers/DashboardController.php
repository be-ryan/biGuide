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
        return view('places.index', compact('places'));
        // return view('dashboard.index', [
        //     'places' => Place::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('places.create', [
            'categories' => PlaceCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // ddd($request);

        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'place_category_id' => 'required',
            'address' => 'required',
            'description' => 'required',
            'img' => 'image|file|max:1024',
        ]);

        if($request->file('img')){
            $file_name = time().'.'.$request->img->extension();
            $request->img->move(public_path('img'),$file_name);

            $validatedData['img'] = $file_name;
        }
        
        Place::create($validatedData);
        
        return redirect('places')->with('success', 'Place has been added');
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
        return view('places.edit', [
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
            'img' => 'image|file|max:1024',
        ]);

        if($request->file('img')){

            if ($place->img !== 'placeImage.png') {
                unlink(public_path('img/'.$place->img));
            }
            
            $file_name = time().'.'.$request->img->extension();
            $request->img->move(public_path('img'),$file_name);

            $validatedData['img'] = $file_name;
        }

        Place::where('id', $place->id)
            ->update($validatedData);

        return redirect()->route('places.index')->with('success', 'Place has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        if($place->img !== 'placeImage.png'){
            unlink(public_path('img/'.$place->img));
        }
        $place->delete();
        return redirect()->route('places.index')->with('success', 'Place has been deleted.');
    }

    // other alternative to redirect to previous page
    // return redirect()->back()->with('success', 'Place has been deleted');
}
