@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom">
            <h2>Create New Place</h2>
        </div>
        <div class="col-lg-8">
            <form method="post" action="/dashboard">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Place Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                </div>
                <button type="submit" class="btn btn-primary">Add Place</button>
            </form>
        </div>
    </div>
@endsection