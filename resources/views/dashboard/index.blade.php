@extends('layouts.main')

<title>Admin</title>

@section('content')
    <div class="container mt-4">
        <h2>Place Posts</h2>
        <div class="table-responsive">
            <a href="/dashboard/create" class="btn btn-success">Add New Place</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Place_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Address</th>
                        <th scope="col">Added</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($places as $place)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$place->id}}</th>
                            <th>{{$place->name}}</th>
                            <th>{{$place->placeCategory->name}}</th>
                            <th>{{$place->address}}</th>
                            <th>{{$place->created_at->format('d M Y')}}</th>
                            <th>
                                <a href="" class="badge bg-info"><i class="bi bi-eye"></i></a>
                                <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="" class="badge bg-danger"><i class="bi bi-trash-fill"></i></a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection