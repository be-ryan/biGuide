@extends('layouts.main')

<title>Profile</title>

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3 border-bottom">
            <h2>My Profile</h2>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif       
            
        <div class="">
            <img src="{{asset('profileImg/'.$user->profileImg)}}" class="rounded-circle" alt="" style="width: 340px; height: 340px;">
            <h3>Name: {{$user->name}}</h3>
            <h3>Email: {{$user->email}}</h3>
            
            <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning text-decoration-none fw-bolder"><i class="bi bi-pencil-square"></i> Edit</a>
        </div>

    </div>
@endsection