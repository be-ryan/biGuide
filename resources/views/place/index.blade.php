@extends('layouts.main')

<title>Admin</title>

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 pt-3 border-bottom">
            {{-- flex-wrap flex-md=wrap --}}
            <h2>Place Post</h2>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif

        <div class="table-responsive">
            <a href="/place/create" class="btn btn-success mb-2">Add Place</a>
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
                <tbody class="table-group-divider">
                    @foreach ($places as $place)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$place->id}}</td>
                            <td>{{$place->name}}</td>
                            <td>{{$place->placeCategory->name}}</td>
                            <td>{{$place->address}}</td>
                            <td>{{$place->created_at->format('d M Y')}}</td>
                            <td>
                                <a href="{{route('place.edit', $place->id)}}" class="badge bg-warning text-decoration-none"><i class="bi bi-pencil-square"></i> Edit</a>
                                <form action="{{route('place.destroy', $place->id)}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0 text-decoration-none" onclick="return confirm('Confirm deletion')">
                                        <i class="bi bi-trash-fill"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection