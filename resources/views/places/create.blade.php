@extends('layouts.main')

<title>Admin Dashboard</title>

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3 border-bottom">
            {{-- flex-wrap flex-md=wrap --}}
            <h2>Create New Place</h2>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/places" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Place Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{old('name')}}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="place_category_id">
                        @foreach ($categories as $category)
                            @if(old('place_category_id') == $category->id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{old('address')}}">
                    @error('address')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label for="img" class="form-label">Image:</label>
                    <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{('img')}}">
                    @error('img')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" style="resize: none;" rows="4">{{old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-5">Add Place</button>
            </form>
        </div>
    </div>
@endsection