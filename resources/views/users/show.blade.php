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
        
        <div class="border border-3 mx-5 mb-5 rounded-4">
            <div class="row justify-content-center align-items-center py-3">
                <div class="col-lg-3 flex-column justify-content-center align-items-center my-3">
                    <img src="{{asset('profileImg/'.$user->profileImg)}}" class="img-fluid rounded-circle" alt="" style="width: 300px; height: 300px; object-fit: cover;">
                </div>
                <div class="col-lg-5 flex-column justify-content-center text-lg-start text-center my-3">
                    <h3 class="fs-4 mb-0">Name</h3>
                    <p class="mb-2">{{$user->name}}</p>
                    <h3 class="fs-4 mb-0">Email</h3>
                    <p class="mb-2">{{$user->email}}</p>
                    <h3 class="fs-4 mb-0">Phone Number</h3>
                    <p class="mb-2">{{$user->phoneNumber ?? '-'}}</p>
                    
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning text-decoration-none fw-bolder mt-2"><i class="bi bi-pencil-square"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection