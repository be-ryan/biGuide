@extends('layouts.main')

<title>Profile</title>

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3 border-bottom">
            <h2>Edit Profile</h2>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif      
        
        <div class="border border-3 mx-5 mb-5 rounded-4">
            <form method="post" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row justify-content-center align-items-center py-3">
                    <div class="col-lg-3 flex-column justify-content-center align-items-center my-3">
                        <img src="{{asset('profileImg/'.$user->profileImg)}}" class="img-fluid rounded-circle" alt="" style="width: 300px; height: 300px; object-fit: cover;">
                        <label for="img" class="form-label mt-2">Change photo:</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="profileImg" value="{{$user->profileImg}}">
                        @error('img')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-5 flex-column justify-content-center text-lg-start text-center my-3">
                        <h3 class="fs-4 mb-0">Name</h3>
                        <p class="mb-2">{{$user->name}}</p>
                        <h3 class="fs-4 mb-0">Email</h3>
                        <p class="mb-2">{{$user->email}}</p>
                        <label for="phoneNumber" class="form-label h3 fs-4">Phone Number</label>
                        <input type="text" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" name="phoneNumber" value="{{old('phoneNumber', $user->phoneNumber)}}" autofocus>
                        @error('phoneNumber')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        
                        <button type="submit" class="btn btn-primary fw-bolder mt-2">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection