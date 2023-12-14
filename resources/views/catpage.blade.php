<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrapcss-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,500;9..40,700&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/category-style.css') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <title>Bi.Guide | Categories </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

@extends('layouts.main')

@section('content')
<body class="wrapper">
   

    <link rel="stylesheet" href="{{ asset('css/category-style.css') }}">
    <h3 style="font-size: 40px; color: blue; font-weight: bold; text-shadow: 0px 2px 4px #D3D3D3;margin: 41px 129px 0 129px;">Categories</h3>

    <br>
    <div class="container category-container">
        @foreach($categories as $category)
        <div class="row category-row">
            <h5>{{ $category->name }}</h5>
        </div>
        @endforeach
    </div>
    <br>
    <br>

    <!-- Card Section -->
    @foreach($categories as $category)
    <h3 style="font-weight: bold; margin: 21px 129px 20px 129px;">Explore
        @if ($category && $category->name)
        <span style="color: orangered; font-weight: bold;">{{ $category->name }}</span>
        @else
        <span>Unknown Category</span>
        @endif
    </h3>
    <br>

    <div class="kumpulan-card">
        <div class="row">
            @if ($category && $category->places)
                @foreach($category->places as $index => $place)
                    @if($index % 3 == 0 && $index != 0)
                        </div><div class="row">
                    @endif
                    <div class="col-4">
                        <a href="{{ route('detail', ['id' => $place->id]) }}" class="card-link">
                            <div class="card mt-4">
                                <img src="{{asset('img/' . $place->img)}}" class="card-img" alt="Image">
                                {{-- <img src="{{ asset('public/img' . $place->img) }}" class="card-img" alt="Image"> --}}

                                <div class="circle-bg">
                                    <i class="far fa-heart bookmark-icon"></i>
                                </div>
                                <div class="card-body">
                                    <div class="row body-row">
                                        <div class="col body-col">
                                            <h5 class="card-title custom-title">{{ $place->name }}</h5>
                                        </div>
                                        <div class="col-auto">
                                            <span class="ml-1">{{ $place->likes }}</span>
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </div>
                                    <p class="card-text">{{ $place->address }}</p>
                                    <h6 class="card-text category-text">
                                        Category: {{ optional($category)->name ?? 'Unknown' }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No places available for this category.</p>
            @endif
        </div>
    </div>
@endforeach

    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-primary font-weight-bold">View All</button>
    </div>

    <br>
    <br>

    {{-- @include('partials.footer') --}}
@endsection
    <!--bootstrapjs-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>