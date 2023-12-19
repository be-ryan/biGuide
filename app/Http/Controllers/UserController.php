<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'profileImg' => 'image|file|max:1024',
            'phoneNumber' => 'nullable|min:11|max:13',
        ]);
    
        if ($request->hasFile('profileImg')) {
            
            if ($user->profileImg !== 'defaultProfile.jpg') {
                unlink(public_path('profileImg/' . $user->profileImg));
            }
    
            $file_name = time() . '.' . $request->profileImg->extension();
            $request->profileImg->move(public_path('profileImg'), $file_name);
    
            $validatedData['profileImg'] = $file_name;
        }

        $user->update($validatedData);
        // dd($validatedData);

        return redirect()->route('users.show', auth()->user()->id)->with('success', 'Profile has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
