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
        {{-- <div class="row p-2"> --}}
            <div class="col-md-3">
                {{-- <img src="{{asset('profileImg/'.$user->profileImg)}}" class="rounded-circle" alt="" style="width: 100%; height: 100%;">   --}}
            </div>
            <div class="col-lg-8">
                <form method="post" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3 col-6">
                        <label for="img" class="form-label">Input new image:</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="profileImg" value="{{$user->profileImg}}">
                        @error('img')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary fw-bolder">Update Profile</button>
                </form>
            </div>
        {{-- </div> --}}
    </div>
@endsection